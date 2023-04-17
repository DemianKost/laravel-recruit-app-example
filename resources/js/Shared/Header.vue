<template>
    <div class="header container mx-auto mt-10 mb-5 flex justify-center">
        <div class="header__content bg-white py-4 px-8 shadow-sm rounded-md md:w-2/3 w-full flex items-center justify-between">
            <a href="/" class="header__logo flex items-center">
                <span class="text-5xl">👻</span>
                <span class="text-2xl ml-3 font-mono uppercase">Recruit</span>
            </a>
            <nav class="hidden md:block">

                <ul class="flex items-center space-x-4 font-light text-zinc-600" v-if="$page.props.auth.user.loggedIn">
                    <li><Link href="/vacancies">Vacancies</Link></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Help</a></li>
                    <li><Link href="/profile">Profile</Link></li>
                    <li><a href="#">Logout 🚪</a></li>
                </ul>
                <ul class="flex items-center space-x-4 font-light text-zinc-600" v-else>
                    <li><Link href="/register">Register</Link></li>
                    <li><Link href="/login">Login</Link></li>
                </ul>

            </nav>
        </div>
    </div>
</template>