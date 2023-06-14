<template>
    <input type="hidden" name="_token" :value="csrf">
</template>

<script>
/**
 * Laravel CSRF Token hidden input.
 *
 * The following is required in the header of the blade file responsible for containing the HTML header info:
 * <meta name="csrf-token" content="{{ csrf_token() }}">
 */
export default {
    created() {
        if (! this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        }
    },

    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
        }
    },
}
</script>
