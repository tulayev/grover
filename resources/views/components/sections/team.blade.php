@props([
    'fromHomePage' => false,
    'members' => null,
])

<section class="team">
    <div class="uk-container uk-container-large">
        @if ($fromHomePage)
            <h2 class="team__title">Team members</h2>
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <h3 class="team__subtitle">Our team</h3>
                <p class="team__text">
                    Our team consists of highly qualified professionals specializing in various areas of legal practice.
                    <br /><br />
                    We are driven by unyielding enthusiasm, inspiration and a special attitude to everything we do.
                </p>
            </div>
        @endif
        @if ($members)
            <div class="team__card_wrapper uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                @php($i = 1)
                @foreach ($members as $member)
                    @if ($i % 2 == 0)
                        <div>
                            <div class="team__card">
                                <div class="team__card-title">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" />
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
                    @else
                        <div>
                            <div class="team__card team__card_first">
                                <div class="team__card-title">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" />
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
                    @endif
                    @php($i++)
                @endforeach
            </div>
        @endif
    </div>
</section>
