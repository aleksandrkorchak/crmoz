<template>
    <div class="code-preview-wrapper my-4">
        <div id="form-floating-label-example"
             class="flex p-0 bg-white bg-gradient-to-r code-preview ">
            <div class="w-full code-responsive-wrapper">
                <form action="/accounts" method="post" novalidate>

                    <csrf-token-input />

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="account_name" id="account_name"
                               class="
                               block
                               py-2.5
                               px-0
                               w-full
                               text-sm
                               text-gray-900
                               bg-transparent
                               border-0
                               border-b-2
                               border-gray-300
                               appearance-none
                               focus:outline-none
                               focus:ring-0
                               focus:border-blue-600
                               peer"
                               placeholder=" "
                               :value="old.account_name"
                        />
                        <label for="account_name"
                               class="
                               peer-focus:font-medium
                               absolute
                               text-sm
                               text-gray-500
                               duration-300
                               transform
                               -translate-y-6
                               scale-75
                               top-3
                               -z-10
                               origin-[0]
                               peer-focus:left-0
                               peer-focus:text-blue-600
                               peer-focus:dark:text-blue-500
                               peer-placeholder-shown:scale-100
                               peer-placeholder-shown:translate-y-0
                               peer-focus:scale-75
                               peer-focus:-translate-y-6
                        ">
                            Account Name
                        </label>
                        <div v-if="'account_name' in errors">
                            <p class="mt-2 text-sm text-red-600 ">
                                <span class="font-medium">{{ errors.account_name[0] }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="account_website" id="account_website"
                               class="
                               block
                               py-2.5
                               px-0
                               w-full
                               text-sm
                               text-gray-900
                               bg-transparent
                               border-0
                               border-b-2
                               border-gray-300
                               appearance-none
                               focus:outline-none
                               focus:ring-0
                               focus:border-blue-600
                               peer"
                               placeholder=" "
                               :value="old.account_website"
                        />
                        <label for="account_website"
                               class="
                               peer-focus:font-medium
                               absolute
                               text-sm
                               text-gray-500
                               duration-300
                               transform
                               -translate-y-6
                               scale-75
                               top-3
                               -z-10
                               origin-[0]
                               peer-focus:left-0
                               peer-focus:text-blue-600
                               peer-focus:dark:text-blue-500
                               peer-placeholder-shown:scale-100
                               peer-placeholder-shown:translate-y-0
                               peer-focus:scale-75
                               peer-focus:-translate-y-6
                        ">
                            Account Website
                        </label>
                        <div v-if="'account_website' in errors">
                            <p class="mt-2 text-sm text-red-600 ">
                                <span class="font-medium">{{ errors.account_website[0] }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text"  name="account_phone" id="account_phone"
                               class="
                               block
                               py-2.5
                               px-0
                               w-full
                               text-sm
                               text-gray-900
                               bg-transparent
                               border-0
                               border-b-2
                               border-gray-300
                               appearance-none
                               focus:outline-none
                               focus:ring-0
                               focus:border-blue-600
                               peer"
                               placeholder=" "
                               :value="old.account_phone"
                        />
                        <label for="account_phone"
                               class="
                               peer-focus:font-medium
                               absolute
                               text-sm
                               text-gray-500
                               duration-300
                               transform
                               -translate-y-6
                               scale-75
                               top-3
                               -z-10
                               origin-[0]
                               peer-focus:left-0
                               peer-focus:text-blue-600
                               peer-focus:dark:text-blue-500
                               peer-placeholder-shown:scale-100
                               peer-placeholder-shown:translate-y-0
                               peer-focus:scale-75
                               peer-focus:-translate-y-6
                        ">
                            Account Phone (123-456-7890)
                        </label>
                        <div v-if="'account_phone' in errors">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500 ">
                                <span class="font-medium">{{ errors.account_phone[0] }}</span>
                            </p>
                        </div>
                    </div>

                    <button type="submit"
                       class="
                        bg-transparent
                        hover:bg-cyan-500
                        text-cyan-500
                        border
                        border-cyan-500
                        hover:text-white
                        font-medium
                        rounded-lg
                        text-sm
                        w-full
                        sm:w-auto
                        px-5
                        py-2.5
                        text-center

                        "
                    >
                        Create
                    </button>
                </form>


            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'errors',
        'old'
    ],
    created() {
    }
}
</script>

<style>

</style>
