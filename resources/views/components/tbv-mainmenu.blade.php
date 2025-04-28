<x-ui.tbv-link-navigation href="{{ route('home') }}" :active="request()->routeIs('home')" class="flex gap-2">
    <x-lucide-home class="h-5 w-5"/>
    Home
</x-ui.tbv-link-navigation>
<x-ui.tbv-link-navigation href="{{ route('team') }}" :active="request()->routeIs('team')" class="flex gap-2">
    <x-lucide-users class="h-5 w-5"/>
    Team
</x-ui.tbv-link-navigation>
<x-ui.tbv-link-navigation href="{{ route('blog') }}" :active="request()->routeIs('blog')" class="flex gap-2">
    <x-lucide-newspaper class="h-5 w-5"/>
    Blog
</x-ui.tbv-link-navigation>
<x-ui.tbv-link-navigation href="{{ route('events') }}" :active="request()->routeIs('events')" class="flex gap-2">
    <x-lucide-calendar-range class="h-5 w-5"/>
    Events
</x-ui.tbv-link-navigation>
<x-ui.tbv-link-navigation href="{{ route('contact') }}" :active="request()->routeIs('contact')" class="flex gap-2">
    <x-lucide-receipt-text class="h-5 w-5"/>
    Contact
</x-ui.tbv-link-navigation>