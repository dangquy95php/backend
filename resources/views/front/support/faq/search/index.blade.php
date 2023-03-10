<x-header>
    <x-slot name="title">{{ $title }} の検索結果｜よくあるご質問｜日本ペイント株式会社</x-slot>
    <x-slot name="description">description</x-slot>
    <x-slot name="keywords">keywords, keywords</x-slot>
    <x-slot name="slug"></x-slot>
    <x-slot name="unique">support_faq</x-slot>
    <x-slot name="og_type">article</x-slot>
    <x-slot name="url">https://www.nipponpaint.co.jp/support/faq/</x-slot>
</x-header>

<main class="p-sfaqsearch">
    <div class="c-breadcrumb">
        <div class="l-cont">
            <ul>
                <li><a href="/">日本ペイントHOME</a></li>
                <li><a href="/support/">お客様サポート</a></li>
                <li><a href="/support/faq/">よくあるご質問</a></li>
                <li><span>{{ implode(' ', $request->input('keywords', [])) }} の検索結果</span></li>
            </ul>
        </div>
    </div>
    <section class="p-sfaqsearch1">
        <div class="l-cont">
            <h1 class="c-title2 c-title2__style2">{{ implode(' ', $request->input('keywords', [])) }} の検索結果<span>／ よくあるご質問</span></h1>
            <div class="c-form1 c-form1--style3">
                <h2 class="c-form1__text">
                    <span class="c-form1__text1">キーワードから探す</span>
                    <span class="c-form1__text2">Keyword</span>
                </h2><!-- / c-form1__text -->
                @include('front.elements.support.faq.search', [
                    'keywords' => $request->get('keywords') ? implode(' ', $request->get('keywords')) : '',
                ])
            </div>
            <ul class="c-list7 c-list7__full">
                @foreach($faqs as $faq)
                    <li class="c-list7__item">
                        <a class="c-list7__txt" href="{{ url("/support/faq/{$faq->id}") }}" class="c-list7__txt">{{ $faq->question }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="p-sfaqcatbox">
                <h2 class="p-sfaqcatbox__txt c-title2 c-title2--center">カテゴリーから探す</h2>
                @include('front.elements.support.faq.category')
            </div>
        </div>
    </section>
</main>

<x-footer></x-footer>
