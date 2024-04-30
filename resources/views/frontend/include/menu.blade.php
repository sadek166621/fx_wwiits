<div class="student-profile-left-part">

    <h6>{{ $student->first_name }} {{ $student->last_name }}</h6>
    <p class="px-5 py-4">Joined as @if ($student->joining_reason == 1)
        Forex Training and Affiliation
        @else
        Forex Training and Job
    @endif</p>
    @php
    $route = Route::current()->getName();
    @endphp
    <ul class="list-unstyled">
        <li>
            <a href="{{route('deposit-packages')}}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'deposit-packages')? 'active':'' }} ">Package
            </a>
        </li>
        <li>
            <a href="{{route('deposit.list')}}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'deposit.list')? 'active':'' }} ">Deposit
            </a>
        </li>
        <li>
            <a href="{{ route('profile-settings') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'profile-settings')? 'active':'' }}">Profile
            </a>
        </li>
        <li>
            <a href="{{ route('training') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'training')? 'active':'' }} ">Training
            </a>
        </li>
        {{-- <li>
            <a href="#"
                {{-- class="font-medium font-15 text-decoration-none ">Blog
            </a>
        </li> --}}
        <li>
            <a href="{{ route('genarate-activation-code') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'genarate-activation-code')? 'active':'' }} ">Activation Code
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('used-activation-code') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'used-activation-code')? 'active':'' }} ">Used Activation Code
            </a>
        </li> --}}
        <li>
            <a href="{{ route('balance-transfer') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'balance-transfer')? 'active':'' }} "> Balance Transfer
            </a>
        </li>
        <li><a href="{{ route('reference') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'reference')? 'active':'' }} ">Reference</a></li>
        <li><a href="{{ route('passbook') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'passbook')? 'active':'' }} ">My Passbook</a></li>
        <li><a href="{{ route('withdraw') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'withdraw')? 'active':'' }} ">Withdrawals</a></li>
        <li><a href="{{ route('password-change') }}"
                class="font-medium font-15 text-decoration-none {{ ($route == 'password-change')? 'active':'' }} ">Change Password</a></li>
    </ul>
</div>
