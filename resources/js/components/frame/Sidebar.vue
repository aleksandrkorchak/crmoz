<template>
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:translate-x-0 -translate-x-full" aria-label="Sidebar" aria-hidden="true">
        <div class="h-full px-3 py-4 overflow-y-auto bg-cyan-600 text-cyan-100">
            <a href="https://zoho.com/" class="flex items-center pl-2.5 mb-5">
                <img src="/images/zoho.svg" class="h-6 mr-3 sm:h-7" alt="Zoho">
            </a>

            <nav>
                <a href="/deals"
                   class="
                   flex
                   group
                   items-center
                   py-3
                   px-4
                   space-x-2
                   hover:bg-cyan-700
                   rounded
                   hover:text-cyan-300
                   transition
                   duration-200
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                    </svg>
                    <span class="text-white group-hover:text-cyan-300">Deal</span>
                </a>
                <a href="/accounts"
                   class="
                   flex
                   group
                   items-center
                   py-3
                   px-4
                   space-x-2
                   hover:bg-cyan-700
                   rounded
                   hover:text-cyan-300
                   transition
                   duration-200
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                    <span class="text-white group-hover:text-cyan-300">Accounts</span>
                </a>
                <a href="/"></a>
            </nav>

        </div>
    </aside>
</template>

<script>
export default {

}
</script>

<style>

</style>
