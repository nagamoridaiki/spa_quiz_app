<template>
  <div>
    <the-header></the-header>
    <main>
      <div class="container">
        <article class="col-md-8 col-xs-12">
          <section class="home-quiz__introduction">
            <h2 class="home-quiz__introduction-h2">
              <img class="home-quiz__introduction-h2-logo" src="/public/images/what-is-mark.png" />4 Answers Quizとは?
            </h2>
            <p>4 Answers Quizとはビジネスマナーから一般常識に至るまで様々なクイズを4択で出題するWEBアプリです。</p>
            <p>何度もトライしてみて正解率100%を目指してみてください。</p>
          </section>
          <section class="home-quiz__setting">
            <h2 class="home-quiz__setting-h2">
              <img class="home-quiz__setting-h2-logo" src="/public/images/directory-icon.png" />出題設定
            </h2>
            <form action="/quiz" method="post">
              <label>
                <input type="checkbox" name="categories[]" value="1" checked />ビジネスマナー
              </label>
              <label>
                <input type="checkbox" name="categories[]" value="2" />一般常識
              </label>
              <label>
                <input type="checkbox" name="categories[]" value="3" />就職・転職
              </label>
              <label>
                <input type="checkbox" name="categories[]" value="4" />法律
              </label>
              <label>
                <input type="checkbox" name="categories[]" value="5" />IT
              </label>
              <label>
                <input type="checkbox" name="categories[]" value="6" />雑学
              </label>
              <div class>
                全項目チェック
                <button type="button" name="check_all" id="check-all" value="1">ON</button>
                <button type="button" name="check_all_off" id="check-all-off" value="1">OFF</button>
              </div>
              <button type="submit" class="btn btn-primary">出題開始</button>
              <input type="hidden" name="_token" value />
            </form>
          </section>
          <section class="home-quiz__ranking">
            <h2 class="home-quiz__ranking-h2">
              <img class="home-quiz__ranking-h2-logo" src="/public/images/graph-icon.png" />ランキング
            </h2>
            <div>
              <label>
                <input class="ranking-radio" type="radio" name="ranking-radio" value="1" checked />総合
              </label>
              <label>
                <input class="ranking-radio" type="radio" name="ranking-radio" value="2" />今月
              </label>
              <label>
                <input class="ranking-radio" type="radio" name="ranking-radio" value="3" />今週
              </label>
            </div>
            <div class="home_quiz__ranking-chart"></div>
          </section>
          <section class="home__notice">
            <h2 class="home__notice-h2">
              <img class="home__notice-h2-logo" src="/public/images/news-icon.png" />お知らせ情報
            </h2>
            <dl>
              <dt>2019/08/23</dt>
              <dd>サイトを開設しました。</dd>
            </dl>
          </section>
        </article>
      <the-sidebar></the-sidebar>
      </div>
    </main>
    <the-footer></the-footer>
  </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
import TheSidebar from "../layout/TheSidebar";

export default {
  components: {
    TheHeader,
    TheFooter,
    TheSidebar,
  }
};
</script>