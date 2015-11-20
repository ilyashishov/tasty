<script id="change_city" type="text/x-handlebars-template">
    {{#each data}}
    <div class="w-city">
        <div class="w-letter">{{@key}}</div>
        <div class="w-region">
            {{#each this}}
            {{#this}}
            <div>
                <span class="cities">{{name}}</span>
                {{#each cities}}
                <div class="city_regions">
                    <a id="c{{id}}" name="{{url}}" href="javascript:void(0)">{{name}}</a>
                </div>
                {{/each}}
            </div>
            {{/this}}
            {{/each}}
        </div>
    </div>
    {{/each}}
</script>

<script id="change_form_city" type="text/x-handlebars-template">
    {{#each data}}
    <div class="w-city">
        <div class="w-letter">{{@key}}</div>
        <div class="w-region">
            {{#each this}}
            {{#this}}
            <div>
                <span class="cities">{{name}}</span>
                {{#each cities}}
                <div class="city_regions">
                    <a id="c{{id}}" name="{{url}}" onclick="" href="javascript:void(0)">{{name}}</a>
                </div>
                {{/each}}
            </div>
            {{/this}}
            {{/each}}
        </div>
    </div>
    {{/each}}
</script>


<script id="city_go_map" type="text/x-handlebars-template">
    {{#each data}}
    <div class="w-city">
        <div class="w-letter">{{@key}}</div>
        <div class="w-region">
            {{#each this}}
            {{#this}}
            <div>
                <span class="cities">{{name}}</span>
                {{#each cities}}
                <div class="city_regions">
                    <a  id="c{{id}}" name="{{url}}"  href="/map/city/{{url}}/">{{name}}</a>
                </div>
                {{/each}}
            </div>
            {{/this}}
            {{/each}}
        </div>
    </div>
    {{/each}}
</script>

<script id="city_go_request" type="text/x-handlebars-template">
    {{#each data}}
    <div class="w-city">
        <div class="w-letter">{{@key}}</div>
        <div class="w-region">
            {{#each this}}
            {{#this}}
            <div>
                <span class="cities">{{name}}</span>
                {{#each cities}}
                <div class="city_regions">
                    <a  id="c{{id}}" name="{{url}}"  href="/request/city/{{url}}/">{{name}}</a>
                </div>
                {{/each}}
            </div>
            {{/this}}
            {{/each}}
        </div>
    </div>
    {{/each}}
</script>

<script id="review" type="text/x-handlebars-template">
    {{#each data}}
    <div class="recall_div_mini2">

        <a href="/feedback/view/{{id}}">
        <div class="recall_img">
            <div class="recall_img2"></div>
                    <span class="span_line">
                       {{text}}
                    </span>
        </div>
            </a>
        <div class="name-div" style="margin-top: 5px">
        <img class="avatar-img" src="/img/news/avatar.png">

        <div class="avatar-text">
            <div>{{name}}</div>
            <div>
                                <span>
                                {{city}}
                            </span>
            </div>
        </div>
    </div>
    </div>
    {{/each}}
</script>


<script id="aplication" type="text/x-handlebars-template">
    {{#each data}}
    <div class="application_img"  onclick="closeWindow2()"></div>
    <div class="application_div">
        <span class="waiting_for_call_1_2">{{name}}</span>
                <span class="waiting_for_call_2_2">
                    , Ваша заявка на получение<br /> займа отправлена!
                </span>
    </div>
    <div class="application_div">
        <div class="adress_meeting">
                <span>
                    Менеджер ожидает Вас с паспортом по адресу:
                </span>
        </div>
        <div class="city_application">
                  <span>
                      {{street}}
                  </span>
        </div>
    </div>
    <div class="application_div">
        <span class="road">Как добраться?</span>
    </div>
    {{/each}}
</script>

<script id="all_faq" type="text/x-handlebars-template">
    {{#each data}}
    {{#moduloIf @index 2}}
    <div class="issue_main">
        {{/moduloIf}}
        <div class="issue_div">
            <div class="question_mark">?</div>
            <div class="question_mark_div">
                <div class="sms">
                                <span>
                                     <a>
                                         {{question}}
                                     </a>
                                </span>
                </div>
                <div class="sms2 news-span-2">
                                <span class="news-span an-span">
                                    {{{answer}}}
                                 </span>
                </div>
            </div>
        </div>
        {{#moduloIf3 @index 2}}
    </div>
    {{/moduloIf3}}
    {{/each}}
</script>

<script id="news_all" type="text/x-handlebars-template">
    {{#each data}}
    <div class="news-m" style="margin: 10px 0 10px 0">
        <div class="data-news-first">
                <span>
                    {{date}}
                </span>
        </div>
        <div class="data-news-second">
            <img class="news-img" src="/img/news/girls.jpg" style="display: none">
            <div class="data-news-second-2">
                <div style="margin: 0">
                     <span class="data-n-span">
                           {{title}}
                     </span>
                </div>
                <div class="news-span news-span-2" style="font-size: 11pt">
                     <span class="news-span">
                         {{{text}}}
                     </span>
                </div>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<script id="reviews_all" type="text/x-handlebars-template">
        {{#each data}}
        {{#moduloIf @index 2}}
        <div class="reviews-first">
            {{/moduloIf}}
    <div class="reviews-first_2">
        <div class="impressions_img">
            <div class="im-text">
            {{text}}
            </div>
            <div class="impressions_img2"></div>
        </div>
        <div class="name-div">
            <img class="avatar-img" src="/img/news/avatar.png">
            <div class="avatar-text">
                <div>{{name}}</div>
                <div>
                                <span>
                                {{city}}
                            </span>
                </div>
            </div>
        </div>
    </div>
            {{#moduloIf1 @index 2}}
        </div>
        {{/moduloIf1}}
    {{/each}}
</script>

<script id="change_office" type="text/x-handlebars-template">
    <div class="call_me_window" id="city_label">
        <span class="waiting_for_call_2">Офисы в городе</span>
        <span class="waiting_for_call_1">{{city.name}}</span>
    </div>
    <div class="fast_money_div" id="city_offices">
    {{#each offices}}
        <div class="map_div">
            <div class="map_half_1"></div>
            <div class="map_half_2">
                <div class="street_div"></div>
                <div class="street_div">
                <span class="office_select">
                   <a onclick="changeOffice({{office_id}},'{{street}}','{{image}}','{{workhours}}')">
                       {{street}}
                   </a>
                </span>
                </div>
            </div>
        </div>
    {{/each}}
    </div>
</script>