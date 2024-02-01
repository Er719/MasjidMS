{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Donations" icon="la la-question" :link="backpack_url('donation')" />
<x-backpack::menu-item title="Events" icon="la la-question" :link="backpack_url('event')" />
<x-backpack::menu-item title="Educational resources" icon="la la-question" :link="backpack_url('educational-resource')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Profiles" icon="la la-question" :link="backpack_url('profile')" />