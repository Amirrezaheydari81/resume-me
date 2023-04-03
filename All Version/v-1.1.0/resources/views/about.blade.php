<!-- Header -->
@extends('layouts.header')
@include('layouts.sidebar')
@section('title', 'درباره من')
@section('index', 'index,follow')
@section('lang', 'en')
@section('author', 'امیررضا حیدری')
<!-- Header -->

<main class="w-full lg:col-span-3" role=main>
    <section>
        <div class="lg:px-10 lg:py-12 p-8">
            <div>
                <h1 class="dark:text-white font-bold md:text-4xl text-2xl text-black tracking-tighter xl:text-8xl">
                    {{ __('word.About') }} <span class=lg:block>{{ __('word.My') }}</span></h1>
            </div>
            <div class="text-zinc-500 text-base dark:text-zinc-500 lg:col-span-3 lg:mt-24 mt-8 space-y-12">
                <article class="md:grid md:grid-cols-4">
                    <div class=md:col-span-3>
                        <div class="dark:text-zinc-500 space-y-6 text-sm text-zinc-600">
                            <p>{{ __('word.My Story') }}</p>
                            <p>Well, let me tell you a little bit about myself, I was a 13-year-old boy and
                                I was very interested in internet phones. After some time, this interest
                                increased and I decided to buy a computer to get to know this environment a
                                little more. I said it would be better to get a little training and I
                                started to see training about anything from the computer, but everything has
                                a price and the price of this work was the time and the money I spent to buy
                                my system was lost. Now you say, why am I telling you now because the system
                                It gave me an error that I didn't know how to solve, and out of curiosity I
                                tampered with the system and changed the devices. After about 2 days, I
                                found out that the system was broken, but it was added to my knowledge that
                                my brother, you don't know anything, don't touch it. But in short, anyone
                                who comes to the computer field should be curious to know how it works,
                                otherwise that person is not good for this field, many people made fun of
                                me, but now they are proud of me because I am their colleague, I owe all
                                this to God, stop it!</p>
                            <h2>I am a web designer, what does that mean?</h2>
                            <p>A web designer is a person who is both technically and coding skilled and
                                very creative. Both of these features will be reflected in the work of the
                                site designer to the same extent. While the site design should have the
                                ability and skill to implement a functional and professional website, it
                                should also keep in mind the importance of using the site in terms of ux or
                                user experience (which is at the end of the article about that we are
                                talking about) should be simple and easy for everyone and make the website
                                attractive and user-friendly by using aesthetic techniques.</p>
                            <h3>And an average programmer! what now</h3>
                            <p>A programmer is a person who has acquired programming expertise and has
                                written programs for a specific purpose using programming languages. A
                                programmer is someone who has logical knowledge in addition to computer
                                knowledge. A successful programmer is someone who identifies the goal well,
                                writes an algorithm, and designs and writes a program in a suitable
                                programming environment with a suitable language.</p>
                            <h3>And a SEO comes in! What is?</h3>
                            <p>SEO or search engine optimization helps people find the products and
                                information they want easily through search engines such as Google and Bing.
                                An SEO specialist or SEO specialist looks for things that are increasing in
                                popularity in search engines by analyzing and studying them, and by
                                implementing strategies and actions, he tries to improve the search results
                                for a specific site. The ultimate goal of this work is to increase the level
                                of website traffic using keywords and topics. In such a way that the user is
                                attracted to the site after entering it, and at the same time, the website
                                is designed based on Google's suggested algorithms.</p>
                            <h3>And proficient in html css, what does that mean?</h3>
                            <p>HTML is derived from the first letters of the term HyperTextMarkupLanguage
                                and is a text markup language (the standard language of web pages). Usually,
                                on a page on the web, there is a set of texts, photos, different sections,
                                with the help of tags and codes provided by HTML, you can create a specific
                                structure of information in this section. Create and display to visitors.
                                Note that each tag in HTML language has its own meaning and concept. pages
                                that are made by this language; They consist of markup tags and have the
                                extension htm or html. These pages can be edited in various editor programs
                                such as Notepad, Visual Stadio, dearm weaver and... Edited and changed. In
                                the html language, different sections and codes (server side and client
                                side) are separated by "tags" and these tags are a tool for how to display
                                information on web pages and by browsers. In fact, tags determine different
                                forms of displaying different elements of a web page. Css is shortened or
                                stands for Cascading Style Sheets, which is a page layout feature; It
                                provides styling and beautification of web pages for site designers. In
                                fact, the structure of a page is determined using HTML, and then this
                                structure and layout is styled by using other codes. All colors, dimensions
                                and sizes, borders, placement, fonts. and other characteristics of the
                                components of a web page will be determined using css. These characteristics
                                will be displayed to users by browsers; Because CSS is a specific standard
                                defined for Internet browser programs, and for this reason, a web page can
                                be seen in the same way in different browsers. Usually, in modern website
                                design methods, all css-related codes are placed in a separate file, and
                                inline styling (inside each HTML tag) is no longer used; Because this work
                                is not suitable for web pages in terms of SEO. So, in a general definition,
                                by using css, you can create the desired form and style for a web page in
                                such a way that it is beautiful, attractive, practical and user-friendly.
                            </p>
                            <h3>And the graphic artist? I will explain again</h3>
                            <p>A graphic artist is someone who conveys a message or an idea to the audience
                                with the help of images and letters based on the order given to him and
                                relying on his art. The work of a graphic artist has different areas and
                                specializations based on the branches of graphic design Visual communication
                                - such as poster design, cover design, logo design, web page design, etc.
                                Illustration - such as illustration for children's books, scientific and
                                educational books, illustration for publications, map design, etc.
                                Environmental Graphics - Environmental graphics designer plays an important
                                role in guiding other people in using that environment by designing a
                                suitable map that shows the location of each part of an environment with a
                                suitable design and color. In addition to creativity and high artistic
                                taste, a graphic designer must have good computer skills and good
                                communication skills. It is possible to acquire the necessary knowledge and
                                expertise for graphic design through educational courses or related
                                university courses. In general, it can be said that a successful graphic
                                artist must have the specialized science of graphics, the ability to work
                                with graphic software and know the latest information and related news, and
                                be familiar with the topics of sociology and psychology.</p>
                            <h4>Who is a digital marketer?</h4>
                            <p>Nowadays, everyone is more or less familiar with internet businesses; Today's
                                internet businesses, just like the old business companies, need someone to
                                handle the marketing of the company. The term digital marketing is composed
                                of two words "digital" and "marketing", which if we translate this term
                                literally, we get to "digital marketing". Of course, keep in mind that
                                "digital marketing" is very different from "traditional marketing", but both
                                people have the same goal and try to increase the sales of a company or
                                organization. Digital marketing also has a simple definition that can help
                                you get to know this profession a lot. "Digital marketing means the use of
                                digital tools in order to communicate with the audience, market and sell
                                products and finally convince them to take the desired action." Today,
                                internet businesses are trying to attract more customers and increase their
                                sales. That's why all of them, which you consider to be a successful online
                                business, have a professional digital marketing expert on their team. Of
                                course, a digital marketing expert plays the role of a company's marketing
                                leader; Coordination and communication between SEO, content marketer and
                                social media marketing is the responsibility of digital marketer. Of course,
                                keep in mind that these roles may increase or decrease depending on the size
                                of a company. For example, in some large companies, instead of a content
                                expert, there is a content team, each of which has smaller roles.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>
</div>
</div>
</body>

</html>
