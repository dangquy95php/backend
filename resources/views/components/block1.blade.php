<div class="c-block1">
    <div class="c-block1__form">
        <div class="c-form1">
            <h2 class="c-form1__text">
                <span class="c-form1__text1">製品・仕様<br class="pc-only">を探す</span>
                <span class="c-form1__text2">Search</span>
            </h2><!-- / c-form1__text -->

            <form class="c-form1__form">
                <div class="c-form1__select">
                    @if ($select_list == "1")
                    <select>
                        <!-- <option value="0">すべて</option>
                        <option value="1">建築用</option>
                        <option value="2">大型構造物・重防食用</option>
                        <option value="3">自動車補修用</option> -->
                        <option value="0">すべて</option>
                        <option value="1">建築用塗料</option>
                        <option value="2">重防食用塗料（製品）</option>
                        <option value="3">重防食用塗料（仕様）</option>
                        <option value="4">自動車補修用塗料</option>
                    </select>
                    @elseif ($select_list == "2")
                    <select>
                        <option value="0">すべて</option>
                        <option value="1">建築用塗料</option>
                        <option value="2">重防食用塗料（製品）</option>
                        <option value="3">重防食用塗料（仕様）</option>
                        <option value="4">自動車補修用塗料</option>
                    </select>
                    @endif
                </div>

                <div class="c-form1__input">
                    <input type="text" placeholder="{{$placeholder ?? '製品名・キーワード・JIS規格を入力して下さい'}}">
                </div>

                <button class="c-form1__btn"></button>
            </form><!-- / c-form1__form -->

        </div>

    </div>
    <div class="c-initials is-active">
        <div class="c-initials__btn sp-only js-c-initials__btn is-active"></div>
        <h3 class="c-initials__title">
            <span class="c-initials__title__jap">製品を<br class="pc-only">50音で探す</span>
            <span class="c-initials__title__eng">Initials</span>
        </h3>
        <div class="c-initials__inner">
            <ul class="c-initials__block1">
                <li class="c-initials__item is-active"><a>ア</a></li>
                <li class="c-initials__item"><a>イ</a></li>
                <li class="c-initials__item"><a>ウ</a></li>
                <li class="c-initials__item"><a>エ</a></li>
                <li class="c-initials__item"><a>オ</a></li>
                <li class="c-initials__item"><a>カ</a></li>
                <li class="c-initials__item"><a>キ</a></li>
                <li class="c-initials__item"><a>ク</a></li>
                <li class="c-initials__item"><a>ケ</a></li>
                <li class="c-initials__item"><a>コ</a></li>
                <li class="c-initials__item"><a>サ</a></li>
                <li class="c-initials__item"><a>シ</a></li>
                <li class="c-initials__item"><a>ス</a></li>
                <li class="c-initials__item"><a>セ</a></li>
                <li class="c-initials__item"><a>ソ</a></li>

                <li class="c-initials__item sp-only"><a>タ</a></li>
                <li class="c-initials__item sp-only"><a>チ</a></li>
                <li class="c-initials__item sp-only"><a>ツ</a></li>
                <li class="c-initials__item sp-only"><a>テ</a></li>
                <li class="c-initials__item sp-only"><a>ト</a></li>
                <li class="c-initials__item sp-only"><a>ナ</a></li>
                <li class="c-initials__item sp-only"><a>ニ</a></li>
                <li class="c-initials__item sp-only"><a>ヌ</a></li>
                <li class="c-initials__item sp-only"><a>ネ</a></li>
                <li class="c-initials__item sp-only"><a>ノ</a></li>
            </ul>

            <ul class="c-initials__block1">
                <li class="c-initials__item pc-only"><a>タ</a></li>
                <li class="c-initials__item pc-only"><a>チ</a></li>
                <li class="c-initials__item pc-only"><a>ツ</a></li>
                <li class="c-initials__item pc-only"><a>テ</a></li>
                <li class="c-initials__item pc-only"><a>ト</a></li>
                <li class="c-initials__item pc-only"><a>ナ</a></li>
                <li class="c-initials__item pc-only"><a>ニ</a></li>
                <li class="c-initials__item pc-only"><a>ヌ</a></li>
                <li class="c-initials__item pc-only"><a>ネ</a></li>
                <li class="c-initials__item pc-only"><a>ノ</a></li>
                <li class="c-initials__item"><a>ハ</a></li>
                <li class="c-initials__item"><a>ヒ</a></li>
                <li class="c-initials__item"><a>フ</a></li>
                <li class="c-initials__item"><a>ヘ</a></li>
                <li class="c-initials__item"><a>ホ</a></li>

                <li class="c-initials__item sp-only"><a>マ</a></li>
                <li class="c-initials__item sp-only is-disable"><a>ミ</a></li>
                <li class="c-initials__item sp-only is-disable"><a>ム</a></li>
                <li class="c-initials__item sp-only is-disable"><a>メ</a></li>
                <li class="c-initials__item sp-only is-disable"><a>モ</a></li>
                <li class="c-initials__item sp-only"><a>ヤ</a></li>
                <li class="c-initials__item sp-only is-disable"></li>
                <li class="c-initials__item sp-only"><a>ユ</a></li>
                <li class="c-initials__item sp-only is-disable"></li>
                <li class="c-initials__item sp-only"><a>ヨ</a></li>
                <li class="c-initials__item sp-only"><a>ラ</a></li>
                <li class="c-initials__item sp-only"><a>リ</a></li>
                <li class="c-initials__item sp-only"><a>ル</a></li>
                <li class="c-initials__item sp-only"><a>レ</a></li>
                <li class="c-initials__item sp-only"><a>ロ</a></li>

                <li class="c-initials__item sp-only"><a>ワ</a></li>
                <li class="c-initials__item sp-only"><a>0-9</a></li>
            </ul>

            <ul class="c-initials__block1 pc-only">
                <li class="c-initials__item"><a>マ</a></li>
                <li class="c-initials__item is-disable"><a>ミ</a></li>
                <li class="c-initials__item is-disable"><a>ム</a></li>
                <li class="c-initials__item is-disable"><a>メ</a></li>
                <li class="c-initials__item is-disable"><a>モ</a></li>
                <li class="c-initials__item"><a>ヤ</a></li>
                <li class="c-initials__item is-disable"></li>
                <li class="c-initials__item"><a>ユ</a></li>
                <li class="c-initials__item is-disable"></li>
                <li class="c-initials__item"><a>ヨ</a></li>
                <li class="c-initials__item"><a>ラ</a></li>
                <li class="c-initials__item"><a>リ</a></li>
                <li class="c-initials__item"><a>ル</a></li>
                <li class="c-initials__item"><a>レ</a></li>
                <li class="c-initials__item"><a>ロ</a></li>
            </ul>

            <ul class="c-initials__block1 pc-only">
                <li class="c-initials__item pc-only"><a>ワ</a></li>
                <li class="c-initials__item pc-only"><a>0-9</a></li>
            </ul>
        </div>

    </div><!-- / c-initials -->
</div><!-- / c-block1 -->