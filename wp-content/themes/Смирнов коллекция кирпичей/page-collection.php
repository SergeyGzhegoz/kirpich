<?php get_header();?>
<!--wrapper-->

<?php /*Template name: collection*/?>

<section class="wrapper">
        <p class="top">последнее обновление: 21.04.2023</p>
        <h1>КЛЕЙМА ПЕТЕРБУРГСКОЙ ГУБЕРНИИ</h1>

        <div class="kleima">
            <a href=""><div><p>А</p></div></a>
            <a href=""><div><p>Б</p></div></a>
            <a href=""><div><p>В</p></div></a>
            <a href=""><div><p>Г</p></div></a>
            <a href=""><div><p>Д</p></div></a>
            <a href=""><div><p>Е-Ж</p></div></a>
            <a href=""><div><p>З</p></div></a>
            <a href=""><div><p>И</p></div></a>
            <a href=""><div><p>К</p></div></a>
            <a href=""><div><p>Л</p></div></a>
            <a href=""><div><p>М</p></div></a>
            <a href=""><div><p>Н</p></div></a>
            <a href=""><div><p>О</p></div></a>
            <a href=""><div><p>П</p></div></a>
            <a href=""><div><p>Р</p></div></a>
            <a href=""><div><p>С</p></div></a>
            <a href=""><div><p>Т</p></div></a>
            <a href=""><div><p>У-Ф</p></div></a>
            <a href=""><div><p>Х-Я</p></div></a>
            <a href=""><div><p>Симв.</p></div></a>
        </div>

        <p class="inf">
            Клейма классифицируются как различные при: <br>
            1) наличии/отсутствии точек после инициалов; <br>
            2) видах конфигурации рамки: прямоугольная, с полукружьем, с закругленными краями, с/без № <br>
            3) размера и стиля шрифта: крупный/мелкий; строчный/прописной и т.п. <br>
            4) если на клейме нет №, то это специально отмечено, в противном случае присутствие № подразумевается <br>
            5) в случае, если перед ПОЛНОЙ фамилией на клейме приведены инициалы имени (и отчества) владельца,
            то клеймо классифицируется по первой букве фамилии
        </p>

        <h1>ВАРИАНТЫ КЛЕЙМЕНИЯ</h1>
        <p class="inf">Примеры разновидностей рамок, шрифтов и расположения надписей на клейме и кирпиче. (Выберете 1 из 3 вариантов клеймения
            для его отображения ниже)</p>
        <div class="choose">
            <details>
                <summary>РАМКИ</summary>
                <button data-src="img/WithRam.jpg">без рамки и №</button>
                <button data-src="img/без рамки с №.jpg">без рамки с №</button>
                <button data-src="img/прямоугольная с №.jpg">прямоугольная с №</button>
                <button data-src="img/прямоугольная без №.jpg">прямоугольная без №</button>
                <button data-src="img/полукружье с №.jpg">полукружье с №</button>
                <button data-src="img/сплюснутое полукружье.jpg">сплюснутое полукружье</button>
                <button data-src="img/полукружье с буквами.jpg">полукружье с буквами</button>
                <button data-src="img/с закруглениями.jpg">с закруглениями</button>
                <button data-src="img/фигурная.jpg">фигурная</button>
                <button data-src="img/шестиугольная.jpg">шестиугольная</button>
                <button data-src="img/восьмиугольная.jpg">восьмиугольная</button>
                <button data-src="img/круговая.jpg">круговая</button>
                <button data-src="img/овальная.jpg">овальная</button>
                <button data-src="img/ромбическая.jpg">ромбическая</button>
                <button data-src="img/в форме герба.jpg">в форме герба</button>
                <button data-src="img/с указанием года.jpg">с указанием года</button>
                <button data-src="img/двойная.jpg">двойная</button>
            </details>

            <details>
                <summary>ШРИФТЫ</summary>
                <button data-src="img/мелкий.jpg">мелкий</button>
                <button data-src="img/крупный.jpg">крупный</button>
                <button data-src="img/печатный.jpg">печатный</button>
                <button data-src="img/прописной.jpg">прописной</button>
                <button data-src="img/толстый.jpg">толстый</button>
                <button data-src="img/тонкий.jpg">тонкий</button>
                <button data-src="img/римские цифры.jpg">римские цифры</button>
                <button data-src="img/буквы слитно.jpg">буквы слитно</button>
                <button data-src="img/выпуклый шрифт.jpg">выпуклый шрифт</button>
                <button data-src="img/в зеркальном отображении.jpg">в зеркальном отображении</button>
                <button data-src="img/дефекты.jpg">дефекты</button>
            </details>

            <details>
                <summary>РАСПОЛОЖЕНИЕ</summary>
                <button data-src="img/в 2 строчки.jpg">в 2 строчки</button>
                <button data-src="img/полукругом.jpg">полукругом</button>
                <button data-src="img/смещенное.jpg">смещенное</button>
                <button data-src="img/№ вертикально.jpg">№ вертикально</button>
                <button data-src="img/№ горизонтально на Запад.jpg">№ горизонтально на Запад</button>
                <button data-src="img/№ горизонтально на Восток.jpg">№ горизонтально на Восток</button>
                <button data-src="img/№ между буквами.jpg">№ между буквами</button>
                <button data-src="img/№ в овале.jpg">№ в овале</button>
                <button data-src="img/произвольная ориентация.jpg">произвольная ориентация</button>
            </details>
        </div>
        
        <div class="pic">
            <img src=""> 
        </div>
        <button class="close" data-src="#">Убрать фотографию</button>
        <script>
             document.body.addEventListener('click', e => {
                if (!e.target.matches('button')) return
                document.querySelector('.pic img').src = "http://localhost/kirpich/wp-content/themes/Смирнов коллекция кирпичей/" + e.target.dataset.src
                
                document.querySelectorAll('button').forEach(btn => btn.classList.remove('active'))
                e.target.classList.add('active')
                })
        </script>
    </section>
<?php get_footer();?>