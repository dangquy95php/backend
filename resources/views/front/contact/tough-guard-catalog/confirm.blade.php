<x-header>
    <x-slot name="title">タフガードQ-R工法カタログお申し込みフォーム｜日本ペイント株式会社</x-slot>
    <x-slot name="description">description</x-slot>
    <x-slot name="keywords">keywords, keywords</x-slot>
    <x-slot name="slug">contactToughConfirm</x-slot>
    <x-slot name="unique">contact_tough</x-slot>
    <x-slot name="og_type">article</x-slot>
    <x-slot name="url">https://www.nipponpaint.co.jp/contact/tough-guard-catalog/confirm/</x-slot>
</x-header>

<main class="p-contact_tough-confirm">
    <div class="c-breadcrumb c-breadcrumb__style1">
        <div class="l-cont">
            <ul>
                <li><a href="/">日本ペイントHOME</a></li>
                <li><a href="/contact/">お問い合わせ</a></li>
                <li><span>タフガードQ-R工法カタログお申し込みフォーム</span></li>
            </ul>
        </div>
    </div>

    <section class="p-contact_tough-confirm1">
        <div class="l-cont2">
            <h1 class="c-title9"><span class="c-title9__text">タフガードQ-R工法カタログお申し込みフォーム</h1>
            <ul class="c-nav4">
                <li class="c-nav4__item"><a href="">
                        <p class="c-nav4__num">01</p>
                        <p class="c-nav4__text">入力</p>
                    </a></li>
                <li class="c-nav4__item is-active"><a href="">
                        <p class="c-nav4__num">02</p>
                        <p class="c-nav4__text">確認</p>
                    </a></li>
                <li class="c-nav4__item"><a href="">
                        <p class="c-nav4__num">03</p>
                        <p class="c-nav4__text">完了</p>
                    </a></li>
            </ul>
            <div class="c-table c-table__style2 c-table__confirm">
                <table>
                    <tbody>
                        <tr>
                            <th>お名前</th>
                            <td>{{ $contacts->name }}</td>
                        </tr>
                        <tr>
                            <th>会社名</th>
                            @if (!empty($contacts->company))
                            <td>{{ $contacts->company }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>部署名</th>
                            @if (!empty($contacts->dept))
                            <td>{{ $contacts->dept }}</td>
                            @endif
                        </tr>
                        <tr>
                            <th>お電話</th>
                            <td>{{ $contacts->phone}}</td>
                        </tr>
                    </tbody>
                </table>
                {{ Form::open(['action' => 'Front\ContactToughGuardCatalogController@store', 'id' => 'post-input']) }}
                <div class="u-center">
                    {{ Form::submit('内容を変更する', ['name' => 'back', 'class' => 'c-btn-confirm']) }}
                    {{ Form::submit('送信する', ['name' => 'send', 'class' => 'c-btn-confirm c-btn-confirm__style1']) }}
                    <div class="c-btn-confirm__img">
                        <img src="/images/common/form_img.svg">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <h2 class="c-title2 c-title2--small">お申し込みに関する注意事項</h2>
            <p class="c-text1">お手数ですが、下記のフォームでお申し込みください。<br>
                タフガードQ-R工法の製品カタログをPDFファイルでダウンロードすることができます。</p>
            <ul class="c-boxlist5">
                <li class="c-boxlist5__item">土日祝祭日、年末年始ほか、当社休業日にいただいたお問い合わせについては、翌営業日以降の対応となりますので、ご了承ください。</li>
                <li class="c-boxlist5__item">お客様にご記入いただいた情報は、当社からのご回答、当社から当社の製品・サービス・活動などに関する情報提供ならびに当社の製品・サービス・活動の向上のために利用させていただくことがございます。</li>
                <li class="c-boxlist5__item">内容によっては、ご回答にお時間をいただく場合や、お答えできかねる場合もあります。</li>
                <li class="c-boxlist5__item">当社からお客様へのご回答の全部または一部を、当社の許可なくお客様ご本人以外の方に広く利用され得る状態にすること（ウェブサイトで公開すること、不特定多数の人にeメールで転送すること等）は、ご遠慮ください。また、当社の許可なくご回答の全部または一部を複製・改変することは、著作権侵害となる場合がありますので、ご注意ください。</li>
                <li class="c-boxlist5__item">個人情報の取り扱いについては、「<a href="/" target="_blank">個人情報の取扱いについて</a>」ページをご覧ください。</li>
                <li class="c-boxlist5__item">このお問い合わせフォームはSSL（SecureSocketLayer）に対応しています、SSLとは、情報を暗号化してインターネット上で通信するための技術で、お客さまの個人情報はこれにより保護されます。</li>
            </ul>
            <p class="c-text1">最近の新型コロナウイルス感染拡大に対する防止策の実施により、お問合せへのご回答、カタログ・色見本帳セット等の発送が遅れる場合がございます。<br>
                ご迷惑をお掛けし恐縮ですが、何卒ご理解の程お願い申し上げます。</p>
        </div>
    </section>
</main>

<x-footer></x-footer>
