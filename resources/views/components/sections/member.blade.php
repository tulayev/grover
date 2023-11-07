
@if ($teamMembers)
    <div class="team__card_wrapper uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
        @php($i = 1)
        @foreach ($teamMembers as $member)
            <div>
                <div class="{{ $i % 3 == 2 ? 'team__card' : 'team__card team__card_first' }}">
                    <div class="team__card-title">
                        {{-- <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" /> --}}
                        <img src="{{ asset('assets/img/sherzod.png') }}" alt="{{ $member->name }}" />
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
                                <div>Phone</div>
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
