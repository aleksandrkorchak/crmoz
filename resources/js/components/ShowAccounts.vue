<template>
    <div class="-mb-3">
        <div class="not-prose relative bg-slate-50 rounded-xl">
            <div
                class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))]"
                style="background-position: 10px 10px;"
            ></div>
            <div class="relative rounded-xl ">
                <div class="shadow-sm">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead class="pt-3">
                        <tr>
                            <th class="border-b font-medium p-4 pl-8 pb-3 text-slate-400 text-left">
                                Account Name
                            </th>
                            <th class="border-b font-medium p-4 pb-3 text-slate-400 text-left">
                                Website
                            </th>
                            <th class="border-b font-medium p-4 pr-8  pb-3 text-slate-400 text-left">
                                Phone
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white ">
                        <tr v-for="account in accounts" :key="account.id" v-if="accounts.length">
                            <td class="border-b border-slate-100 p-4 pl-8 text-slate-500 ">
                                {{ account.Account_Name }}
                            </td>
                            <td class="border-b border-slate-100  p-4 text-slate-500">
                                {{ account.Website }}
                            </td>
                            <td class="border-b border-slate-100 p-4 pr-8 text-slate-500">
                                {{ account.Phone }}
                            </td>
                        </tr>
                        <tr v-else>
                            <td colspan="4" class="text-center py-4">
                                <p>No accounts</p>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl"></div>
        </div>

        <div class="py-4">
            <a
                class="
                bg-transparent
                hover:bg-cyan-500
                text-cyan-500
                font-semibold
                hover:text-white
                py-2
                px-4
                border
                border-cyan-500
                hover:border-transparent
                rounded
                "
                href="/accounts/create"
            >
                Add Account
            </a>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        accounts: {
            type: Array,
            required: true
        },

    },
    methods: {},
    created() {},
    mounted() {}
}
</script>

<style>

</style>
