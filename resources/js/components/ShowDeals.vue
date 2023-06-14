<template>
    <div class="-mb-3">
        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden ">
            <div
                class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))]"
                style="background-position: 10px 10px;"></div>
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-hidden">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead class="pt-3">
                        <tr>
                            <th class="border-b font-medium p-4 pl-8 pb-3 text-slate-400 text-left">
                                Deal Name
                            </th>
                            <th class="border-b font-medium p-4 pb-3 text-slate-400 text-left">
                                Stage
                            </th>
                            <th class="border-b font-medium p-4 pr-8 pb-3 text-slate-400 text-left">
                                Closing Date
                            </th>
                            <th class="border-b font-medium p-4 pr-8 pb-3 text-slate-400 text-left">
                                Account Name
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">

                            <tr v-for="deal in deals" :key="deal.id" v-if="deals.length">
                                <td class="border-b border-slate-100  p-4 pl-8 text-slate-500">
                                    {{ deal.Deal_Name }}
                                </td>
                                <td class="border-b border-slate-100  p-4 text-slate-500">
                                    {{ deal.Stage }}
                                </td>
                                <td class="border-b border-slate-100  p-4 pr-8 text-slate-500">
                                    {{ deal.Closing_Date }}
                                </td>
                                <td class="border-b border-slate-100 p-4 pr-8 text-slate-500 ">
                                    {{ deal.Account_Name['name'] }}
                                </td>
                            </tr>
                            <tr v-else>
                                <td colspan="4" class="text-center py-4">
                                    <p >No deals</p>
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
                href="/deals/create"
                >
                Add Deal
            </a>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        deals: {
            type: Array,
            required: true
        }
    },
    mounted() {
    }
}
</script>

<style>

</style>
