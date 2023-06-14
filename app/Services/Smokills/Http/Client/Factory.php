<?php

namespace App\Services\Smokills\Http\Client;

use Illuminate\Http\Client\Factory as BaseFactory;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Arr;

class Factory extends BaseFactory
{
    protected $ignoreDefaultOptions = false;

    protected $defaultOptions = [];

    public function ignoreDefaultOptions()
    {
        $this->ignoreDefaultOptions = true;

        return $this;
    }

    public function withoutDefaultOptions($keys = null)
    {
        if ($keys === null) {
            return $this->ignoreDefaultOptions();
        }

        if (func_num_args() > 1) {
            $keys = func_get_args();
        }

        $this->defaultOptions = with($this->defaultOptions, function ($options) use ($keys) {
            foreach (Arr::wrap($keys) as $key) {
                Arr::forget($options, $key);
            }

            return $options;
        });

        return $this;
    }

    public function withDefaultOptions(array $options)
    {
        $this->defaultOptions = array_merge_recursive($this->defaultOptions, $options);

        return $this;
    }

    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        if ($this->defaultOptions && ! $this->ignoreDefaultOptions) {
            return tap(new PendingRequest($this), function ($request) {
                $request->withOptions($this->defaultOptions)
                    ->stub($this->stubCallbacks);
            })->{$method}(...$parameters);
        }

        return parent::__call($method, $parameters);
    }
}
