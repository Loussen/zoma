{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Customers" icon="la la-question" :link="backpack_url('customer')" />
<x-backpack::menu-item title="Eggs" icon="la la-question" :link="backpack_url('egg')" />
<x-backpack::menu-item title="Birds" icon="la la-question" :link="backpack_url('bird')" />
<x-backpack::menu-item title="Customer birds" icon="la la-question" :link="backpack_url('customer-bird')" />
<x-backpack::menu-item title="Customer eggs" icon="la la-question" :link="backpack_url('customer-egg')" />