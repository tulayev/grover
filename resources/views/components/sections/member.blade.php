@if ($teamMembers)
    @if (str_contains(url()->current(), '/about'))
        <div class="team__card_wrapper uk-child-width-1-1 uk-child-width-1-2@s">
            @php($ceo = $teamMembers->first())
            <div class="uk-margin-auto">
                <div class="team__card">
                    <div class="team__card-title">
                        <img
                            src="{{ $ceo->image ? asset('storage/' . $ceo->image) : asset('assets/img/sherzod.png') }}"
                            alt="{{ $ceo->name }}"
                        />
                    </div>
                    <div class="team__card-body">
                        <h4>{{ $ceo->name }}</h4>
                        <p>{{ $ceo->position }}</p>
                        <ul>
                            <li class="uk-flex uk-flex-between">
                                <div>Email</div>
                                <div>{{ $ceo->email }}</div>
                            </li>
                            <li class="uk-flex uk-flex-between">
                                <div>{{ __('contact_phone') }}</div>
                                <div>{{ $ceo->phone }}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="team__card_wrapper uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
            @php($i = 1)
            @foreach ($teamMembers as $member)
                <div>
                    <div class="{{ $i % 3 == 2 ? 'team__card' : 'team__card team__card_first' }}">
                        <div class="team__card-title">
                            <img
                                src="{{ $member->image ? asset('storage/' . $member->image) : asset('assets/img/sherzod.png') }}"
                                alt="{{ $member->name }}"
                            />
                        </div>
                        <div class="team__card-body">
                            <h4>{{ $member->name }}</h4>
                            <p>{{ $member->position }}</p>
                            <ul>
                                <li class="uk-flex uk-flex-between">
                                    <div>Email</div>
                                    <div>{{ $member->email }}</div>
                                </li>
                                <li class="uk-flex uk-flex-between">
                                    <div>{{ __('contact_phone') }}</div>
                                    <div>{{ $member->phone }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @php($i++)
            @endforeach
        </div>
    @endif
@else

@endif
