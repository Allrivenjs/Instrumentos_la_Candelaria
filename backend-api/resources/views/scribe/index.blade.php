<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://backend-api.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.21.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.21.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product-management">
                    <a href="#product-management">Product Management</a>
                </li>
                                    <ul id="tocify-subheader-product-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-management-GETapi-products">
                        <a href="#product-management-GETapi-products">Desplay a listing of products</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-management-POSTapi-products">
                        <a href="#product-management-POSTapi-products">Store a newly created resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-management-GETapi-products--id-">
                        <a href="#product-management-GETapi-products--id-">Display the specified resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-management-PUTapi-products--id-">
                        <a href="#product-management-PUTapi-products--id-">Update the specified resource in storage.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-management-DELETEapi-products--id-">
                        <a href="#product-management-DELETEapi-products--id-">Remove the specified resource from storage.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 17 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://backend-api.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="product-management">Product Management</h1>

    <p>APIs to manage the product resource</p>

            <h2 id="product-management-GETapi-products">Desplay a listing of products</h2>

<p>
</p>

<p>Gets a list of users</p>

<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://backend-api.test/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://backend-api.test/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;sku&quot;: &quot;9785389188631&quot;,
            &quot;name&quot;: &quot;Mr. Landen Ankunding&quot;,
            &quot;price&quot;: 716761,
            &quot;weight&quot;: 0,
            &quot;description&quot;: &quot;Suscipit corporis non natus at cumque. Est illo sit atque quia omnis facilis ratione. Veritatis modi optio eos non et est. Tempora necessitatibus reiciendis fugiat. Asperiores qui sit error illo. Exercitationem expedita dolores numquam sunt sed voluptas ratione eligendi. Officiis omnis nam magni. Ut eaque minima distinctio. Voluptas consequuntur sapiente id. Rerum voluptatum quo quam est.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/172a258f9738bbe996e808bb4ef4bc5f.png&quot;,
            &quot;stock&quot;: 60,
            &quot;slug&quot;: &quot;mr-landen-ankunding&quot;,
            &quot;user_id&quot;: 4,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Mrs. Lillie Kuhlman Jr.&quot;,
                &quot;email&quot;: &quot;considine.jolie@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;url&quot;: &quot;storage/product/397695d3a0031777f93cafdc49ba8c4a.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;url&quot;: &quot;storage/product/4c92504fb9db459abccac094caacc976.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;url&quot;: &quot;storage/product/2ad0f9d7eb80fcb1bc33d9e7aa13366d.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:20.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;sku&quot;: &quot;9793301646305&quot;,
            &quot;name&quot;: &quot;Ramiro VonRueden&quot;,
            &quot;price&quot;: 219848,
            &quot;weight&quot;: 3,
            &quot;description&quot;: &quot;Quia aut deleniti et commodi. Aliquam veniam quis sit non ut aut. Libero inventore quidem quo rerum ipsam consectetur fuga nihil. Voluptate minima non rerum enim quaerat. Sed laborum harum et. Sequi explicabo aut voluptas possimus sint. Esse eum ducimus saepe et molestiae est. Fuga maxime nulla similique eius fugit. Praesentium tempora non inventore sed facilis fuga dolore. Vitae aut qui quam iusto non delectus. Voluptatem est quod totam laboriosam consectetur et nisi.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/1f109063391f7b0fc32c219d9a3a65e3.png&quot;,
            &quot;stock&quot;: 3,
            &quot;slug&quot;: &quot;ramiro-vonrueden&quot;,
            &quot;user_id&quot;: 5,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;Brennan Weber&quot;,
                &quot;email&quot;: &quot;von.dorian@example.com&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;url&quot;: &quot;storage/product/4b1e2c311410691f06cd196bff3ba219.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;url&quot;: &quot;storage/product/c2d60e5a387cd09227e36cdad6dbb3a3.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;url&quot;: &quot;storage/product/c66d83c3ff703f2a69c364f63fa25bd4.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;sku&quot;: &quot;9794981261642&quot;,
            &quot;name&quot;: &quot;Immanuel Homenick&quot;,
            &quot;price&quot;: 40554,
            &quot;weight&quot;: 4,
            &quot;description&quot;: &quot;Et molestiae exercitationem corrupti odio. Et minus labore aliquid quis ut corrupti repudiandae. Qui cum reprehenderit cumque illum. Alias autem et dolorem mollitia. Aliquid est suscipit quia ut id. Dignissimos eaque quasi eligendi totam eligendi. Debitis minus ratione ullam adipisci nulla aut et. Quas ullam illum sed molestiae nemo. Occaecati quas at eius facilis. Dolor enim sit possimus ullam exercitationem sed odit. Eum itaque provident ipsa eos quibusdam.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/b1379c21e139c18eefeba7848e2fbc60.png&quot;,
            &quot;stock&quot;: 99,
            &quot;slug&quot;: &quot;immanuel-homenick&quot;,
            &quot;user_id&quot;: 4,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Mrs. Lillie Kuhlman Jr.&quot;,
                &quot;email&quot;: &quot;considine.jolie@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;url&quot;: &quot;storage/product/94bd57238c7cfde248e1e0b76885552a.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;url&quot;: &quot;storage/product/d9db971b932780dabc30b36a56d14d29.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;url&quot;: &quot;storage/product/be0f6c456523825fa98d66bb00ddf859.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:21.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;sku&quot;: &quot;9795939827194&quot;,
            &quot;name&quot;: &quot;Prof. Imani Howell&quot;,
            &quot;price&quot;: 745938,
            &quot;weight&quot;: 0,
            &quot;description&quot;: &quot;Sit ad molestiae voluptas praesentium est quo. Et nisi laborum quia. Unde ut magnam iste cum asperiores. Neque iure harum porro explicabo dignissimos. Et dignissimos quis accusamus odio qui officiis quidem ipsam. Quia unde nobis aut. Aut adipisci ut sunt voluptatum. Sapiente commodi explicabo neque. Tenetur omnis reiciendis et molestias fugiat deleniti debitis. Cum numquam laudantium rem aliquam quo. Eligendi omnis et officiis qui eum suscipit rerum.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/304787cd3b562f49cbc7ce6ea80828cc.png&quot;,
            &quot;stock&quot;: 20,
            &quot;slug&quot;: &quot;prof-imani-howell&quot;,
            &quot;user_id&quot;: 3,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Eileen Grady&quot;,
                &quot;email&quot;: &quot;bethel44@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;url&quot;: &quot;storage/product/ad28af090b29cfb8e85b560a508b92d3.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;url&quot;: &quot;storage/product/8c4fc5b29be36323d6e4af08c58ed419.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;url&quot;: &quot;storage/product/320d6371c634d22b6d9aa93e8709ce0f.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:22.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;sku&quot;: &quot;9785971412601&quot;,
            &quot;name&quot;: &quot;Maverick Upton&quot;,
            &quot;price&quot;: 562324,
            &quot;weight&quot;: 1,
            &quot;description&quot;: &quot;Omnis qui recusandae tempore tempore recusandae aspernatur. Animi quis qui et odio tenetur. Quis nisi culpa quis quia. Est consequatur commodi reiciendis quo dolorum. Aut laborum vitae labore autem qui. Quaerat beatae voluptatem aut molestiae voluptatibus dolorem. Sit ipsam hic consequuntur beatae blanditiis optio. Voluptatem aut quisquam rerum ipsa fuga et. Qui dicta nisi quia aut aut fugit alias. Sunt consequuntur ipsum qui occaecati est.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/890aea4d3f5ed41a001bd62391aed8f7.png&quot;,
            &quot;stock&quot;: 32,
            &quot;slug&quot;: &quot;maverick-upton&quot;,
            &quot;user_id&quot;: 7,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 7,
                &quot;name&quot;: &quot;Dr. Florida Watsica MD&quot;,
                &quot;email&quot;: &quot;sfarrell@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;url&quot;: &quot;storage/product/70a4f54b48801230c2bcfaced5c5d743.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;url&quot;: &quot;storage/product/7818b8263aafca0d2b9daf0af69b8e88.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;url&quot;: &quot;storage/product/092aefd6bd106a97b1f425cc9de57541.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;sku&quot;: &quot;9795838407206&quot;,
            &quot;name&quot;: &quot;Wilma Leannon&quot;,
            &quot;price&quot;: 43221,
            &quot;weight&quot;: 1,
            &quot;description&quot;: &quot;Illum rerum provident temporibus labore in pariatur saepe. Qui dolorem aut alias inventore veniam non ad. Tempore quia eaque eaque vel hic totam. Omnis in vitae dolores et voluptatem. Perspiciatis voluptas enim beatae et aspernatur tenetur. Ipsam blanditiis est rem quae enim debitis commodi. Corrupti quidem ut qui mollitia suscipit magni. Nemo rerum sed quis reprehenderit voluptates et.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/bd5633def1c05cfe4d1ca8fd910bdd25.png&quot;,
            &quot;stock&quot;: 61,
            &quot;slug&quot;: &quot;wilma-leannon&quot;,
            &quot;user_id&quot;: 2,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Celine Heathcote&quot;,
                &quot;email&quot;: &quot;orlando93@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 16,
                    &quot;url&quot;: &quot;storage/product/9b177e906b96a4df5709d2a546e3c4bf.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                },
                {
                    &quot;id&quot;: 17,
                    &quot;url&quot;: &quot;storage/product/04736d392cf741c444532a228a97188c.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                },
                {
                    &quot;id&quot;: 18,
                    &quot;url&quot;: &quot;storage/product/2ca9298dd5e5a4839cc8a3ae5b67fc90.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:23.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;sku&quot;: &quot;9792952012620&quot;,
            &quot;name&quot;: &quot;Ansel Padberg&quot;,
            &quot;price&quot;: 605259,
            &quot;weight&quot;: 2,
            &quot;description&quot;: &quot;Perferendis et culpa quaerat iusto expedita eum ut. Eum aut et adipisci aut earum. Neque consequatur sed aspernatur excepturi labore quam ipsam. Molestiae autem consequuntur et et qui ullam vitae non. Quo sunt porro aut quia voluptate eos libero. Id eos est qui et voluptas qui. Est doloribus optio eaque ea incidunt aut omnis.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/220b19ca47348abe861b850bef2f8a83.png&quot;,
            &quot;stock&quot;: 91,
            &quot;slug&quot;: &quot;ansel-padberg&quot;,
            &quot;user_id&quot;: 4,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 4,
                &quot;name&quot;: &quot;Mrs. Lillie Kuhlman Jr.&quot;,
                &quot;email&quot;: &quot;considine.jolie@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 19,
                    &quot;url&quot;: &quot;storage/product/bf58279cd3b95831d6732b6fe9d44a2c.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;
                },
                {
                    &quot;id&quot;: 20,
                    &quot;url&quot;: &quot;storage/product/754d9313f6c6ac06278e168942ea89a4.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;
                },
                {
                    &quot;id&quot;: 21,
                    &quot;url&quot;: &quot;storage/product/298bab882267e437170a61550fc5d5b1.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:24.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;sku&quot;: &quot;9787490250245&quot;,
            &quot;name&quot;: &quot;Cyril Will&quot;,
            &quot;price&quot;: 186375,
            &quot;weight&quot;: 0,
            &quot;description&quot;: &quot;Ex nostrum magni rem veniam. Qui et fugit sed consequatur sed iste voluptas. Eligendi aperiam veniam eaque occaecati sit qui. Consectetur vero reprehenderit dicta adipisci consequatur ab. In molestiae ut animi iure est quia quo. Dignissimos fugit molestiae molestias. Voluptatem ut magnam non maxime cupiditate. Quis dolorem quod non reiciendis.&quot;,
            &quot;thumbnail&quot;: &quot;storage/product/c833bea09bcf7a4e8b2d0a87162a1843.png&quot;,
            &quot;stock&quot;: 16,
            &quot;slug&quot;: &quot;cyril-will&quot;,
            &quot;user_id&quot;: 9,
            &quot;created_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-01-17T07:44:19.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: 9,
                &quot;name&quot;: &quot;Prof. Russ Pagac&quot;,
                &quot;email&quot;: &quot;ukreiger@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;created_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-01-17T07:44:17.000000Z&quot;
            },
            &quot;image&quot;: [
                {
                    &quot;id&quot;: 22,
                    &quot;url&quot;: &quot;storage/product/1e18153a5ecc45185a83fde4705c257b.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;
                },
                {
                    &quot;id&quot;: 23,
                    &quot;url&quot;: &quot;storage/product/b1b26402263c11176417957cea460ea1.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;
                },
                {
                    &quot;id&quot;: 24,
                    &quot;url&quot;: &quot;storage/product/c5e719e96a61b15069b2fa47a72628be.png&quot;,
                    &quot;created_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-01-17T07:44:25.000000Z&quot;
                }
            ]
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://backend-api.test/api/products?page=1&quot;,
        &quot;last&quot;: &quot;http://backend-api.test/api/products?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://backend-api.test/api/products?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://backend-api.test/api/products?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://backend-api.test/api/products?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://backend-api.test/api/products?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://backend-api.test/api/products&quot;,
        &quot;per_page&quot;: 8,
        &quot;to&quot;: 8,
        &quot;total&quot;: 16
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                    </form>

            <h2 id="product-management-POSTapi-products">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://backend-api.test/api/products" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=modi" \
    --form "description=oyuqbjnufmxckxamofqljmgvlkimzpnnpiikgjptrxpilifmlsyxnqjjqkdkesazhcmsacpysbpyspzuesocwzfaukpdtpelbglglcsothnamroxrrghzdplgpkztoiqbicyoabkepyusxoulboddbemoxbtdz" \
    --form "price=1" \
    --form "weight=0" \
    --form "stock=0" \
    --form "thumbnail=@/tmp/phpXK2B2v" \
    --form "images=@/tmp/php1Q2BSt" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://backend-api.test/api/products"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'modi');
body.append('description', 'oyuqbjnufmxckxamofqljmgvlkimzpnnpiikgjptrxpilifmlsyxnqjjqkdkesazhcmsacpysbpyspzuesocwzfaukpdtpelbglglcsothnamroxrrghzdplgpkztoiqbicyoabkepyusxoulboddbemoxbtdz');
body.append('price', '1');
body.append('weight', '0');
body.append('stock', '0');
body.append('thumbnail', document.querySelector('input[name="thumbnail"]').files[0]);
body.append('images', document.querySelector('input[name="images"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
</span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products"></code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-products"
               value="modi"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-products"
               value="oyuqbjnufmxckxamofqljmgvlkimzpnnpiikgjptrxpilifmlsyxnqjjqkdkesazhcmsacpysbpyspzuesocwzfaukpdtpelbglglcsothnamroxrrghzdplgpkztoiqbicyoabkepyusxoulboddbemoxbtdz"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 850 characters.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="price"
               data-endpoint="POSTapi-products"
               value="1"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>weight</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="weight"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>stock</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="stock"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>thumbnail</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="thumbnail"
               data-endpoint="POSTapi-products"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
                <p>
            <b><code>images</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="images"
               data-endpoint="POSTapi-products"
               value=""
               data-component="body" hidden>
    <br>
<p>Multi-images</p>
        </p>
        </form>

            <h2 id="product-management-GETapi-products--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://backend-api.test/api/products/cupiditate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://backend-api.test/api/products/cupiditate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Product] 1&quot;,
    &quot;exception&quot;: &quot;Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException&quot;,
    &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php&quot;,
    &quot;line&quot;: 385,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php&quot;,
            &quot;line&quot;: 332,
            &quot;function&quot;: &quot;prepareException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/nunomaduro/collision/src/Adapters/Laravel/ExceptionHandler.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Exceptions\\Handler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;render&quot;,
            &quot;class&quot;: &quot;NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 172,
            &quot;function&quot;: &quot;handleException&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 127,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 697,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 672,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 636,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 625,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/fruitcake/laravel-cors/src/HandleCors.php&quot;,
            &quot;line&quot;: 52,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fruitcake\\Cors\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 117,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 75,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 48,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 653,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 298,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1005,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 94,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/home/allrivenjs/Programacion/Instrumentos_la_Candelaria/backend-api/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--id-"></code></pre>
</span>
<span id="execution-error-GETapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--id-"></code></pre>
</span>
<form id="form-GETapi-products--id-" data-method="GET"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--id-"
                    onclick="tryItOut('GETapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--id-"
                    onclick="cancelTryOut('GETapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-products--id-"
               value="cupiditate"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

            <h2 id="product-management-PUTapi-products--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://backend-api.test/api/products/neque" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=velit" \
    --form "description=ejaimvqsy" \
    --form "price=0" \
    --form "weight=0" \
    --form "stock=1" \
    --form "thumbnail=@/tmp/php2sRKdv" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://backend-api.test/api/products/neque"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'velit');
body.append('description', 'ejaimvqsy');
body.append('price', '0');
body.append('weight', '0');
body.append('stock', '1');
body.append('thumbnail', document.querySelector('input[name="thumbnail"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--id-">
</span>
<span id="execution-results-PUTapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--id-"></code></pre>
</span>
<form id="form-PUTapi-products--id-" data-method="PUT"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--id-"
                    onclick="tryItOut('PUTapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--id-"
                    onclick="cancelTryOut('PUTapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="PUTapi-products--id-"
               value="neque"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-products--id-"
               value="velit"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-products--id-"
               value="ejaimvqsy"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 850 characters.</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="price"
               data-endpoint="PUTapi-products--id-"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>weight</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="weight"
               data-endpoint="PUTapi-products--id-"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>stock</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="stock"
               data-endpoint="PUTapi-products--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>Must be at least 1.</p>
        </p>
                <p>
            <b><code>thumbnail</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="thumbnail"
               data-endpoint="PUTapi-products--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be an image.</p>
        </p>
        </form>

            <h2 id="product-management-DELETEapi-products--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://backend-api.test/api/products/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://backend-api.test/api/products/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--id-">
</span>
<span id="execution-results-DELETEapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--id-"></code></pre>
</span>
<form id="form-DELETEapi-products--id-" data-method="DELETE"
      data-path="api/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--id-"
                    onclick="tryItOut('DELETEapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--id-"
                    onclick="cancelTryOut('DELETEapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="id"
               data-endpoint="DELETEapi-products--id-"
               value="consequatur"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
