<template>
    <div class="code-preview-wrapper my-4">
        <div id="form-floating-label-example"
             class="flex p-0 bg-white bg-gradient-to-r code-preview ">
            <div class="w-full code-responsive-wrapper">
                <form action="/deals" method="post" novalidate>
                    <csrf-token-input />
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="deal_name" id="deal_name"
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
                               placeholder=" " required
                               :value="old.deal_name"
                        />
                        <label for="deal_name"
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
                            Deal Name
                        </label>
                        <div v-if="'deal_name' in errors">
                            <p class="mt-2 text-sm text-red-600 ">
                                <span class="font-medium">{{ errors.deal_name[0] }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="deal_closing_date" id="deal_closing_date"
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
                               required
                               :value="old.deal_closing_date"
                        />
                        <label for="deal_closing_date"
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
                            Closing Date
                        </label>
                        <div v-if="'deal_closing_date' in errors">
                            <p class="mt-2 text-sm text-red-600">
                                <span class="font-medium">{{ errors.deal_closing_date[0] }}</span>
                            </p>
                        </div>
                    </div>

                    <div class=" relative w-64">
                        <select name="deal_stage_id" id="deal_stage_id"
                            class="block
                            appearance-none
                            w-full
                            bg-white
                            border
                            border-gray-400
                            hover:border-gray-500
                            px-4
                            py-2
                            pr-8
                            rounded
                            shadow
                            leading-tight
                            focus:outline-none
                            focus:shadow-outline
                            ">
                            <option disabled selected>Stage</option>
                            <option v-for="stage in stages" :value="stage.id" :selected="stage.id == old.deal_stage_id">
                                {{ stage.display_value }}
                            </option>
                        </select>
                        <div v-if="'deal_stage_id' in errors">
                            <p class="mt-2 text-sm text-red-600">
                                <span class="font-medium">{{ errors.deal_stage_id[0] }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 relative w-64">
                        <select name="deal_account_id" id="deal_account_id"
                            class="
                            block
                            appearance-none
                            w-full
                            bg-white
                            border
                            border-gray-400
                            hover:border-gray-500
                            px-4
                            py-2
                            pr-8
                            rounded
                            shadow
                            leading-tight
                            focus:outline-none
                            focus:shadow-outline">
                            <option disabled selected>Account</option>
                            <option v-for="account in accounts" :value="account.id" :selected="account.id == old.deal_account_id">
                                {{ account.Account_Name }}
                            </option>
                        </select>
                        <div v-if="'deal_account_id' in errors">
                            <p class="mt-2 text-sm text-red-600">
                                <span class="font-medium">{{ errors.deal_account_id[0] }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="py-4">
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
                    </div>
                </form>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        accounts: {
            required: true
        },
        stages: {
            required: true
        },
        errors: {},
        old: {}
    },
    mounted() {
    }
}
</script>

<style>

</style>
