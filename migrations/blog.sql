-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Сен 25 2022 г., 10:13
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`) VALUES
(5, 'Fashion', 'The most popular', '/1664019588_Pantone-Fashion-Colo.jpeg'),
(6, 'War', 'Review of weapons', '/1664019669_60521010_303.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author_id` int UNSIGNED DEFAULT NULL,
  `thumbnail` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `category_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author_id`, `thumbnail`, `created_at`, `category_id`) VALUES
(19, 'Короткий огляд САУ CAESAR – французька гаубиця, яку поставлять ЗСУ', 'Один  з основних пунктів західних поставок озброєнь в Україну є артилерія (як самохідна, так і причіпна). Нам передають гаубиці США, Чехія (12 155-міліметрових САУ DANA), Естонія (9 гаубиць Д-30). Окрім цього, потенційно Німеччина може надати PzH 2000, Словаччина – ZUZANA. Зараз ми дізналися з інтерв’ю Емманюеля Макрона, що ЗСУ отримає від Франції 155-міліметрові САУ CAESAR.\n\nCAESAR – це 155-міліметрова гаубиця, яка базується на колісному шасі, роль якого може виконувати Renault Sherpa 10 чи 6×6 Unimog U2450L (виробництва Daimler Truck). У оновленій версії, CAESAR 8×8, використовується шасі Tatra T-815 8×8. По суті, це озброєння можна назвати аналогом ZUZANA, DANA, та української САУ 2С22 “Богдана”, але використовує снаряд НАТО 155-мм. CAESAR може досягати максимальної дальності стрільби 42 кілометри (звичайним снарядом), та 50 км (активно-реактивним).\n\n\n\nЗараз САУ CAESAR використовують Франція, Данія, Індонезія, Саудівська Аравія і Таїланд. Більша частина CAESAR 6×6, які використовуються Францією, мають отримати оновлену версію Mark II, яка матиме броньовану кабіну, нову систему керування вогнем та нове шасі, але в Україну будуть доставлені старі версії CAESAR. Поки невідомо, скільки саме CAESAR будуть доставлені в Україну, але вже відомо, що в ЗСУ розпочато навчання з ними.\n\nОкрім САУ CAESAR, Франція доставить в Україну ПТРК MILAN, що в плані характеристик нагадує український ПТРК “Корсар”. Він характеризується дальністю 2-3 кілометри, кумулятивною боєголовкою та керується по дротах.\n\n\n\nТехнічні характеристики САУ CAESAR\nМаса – 17,7 т (6×6), 28,7-30,2 т (8×8)\nДовжина – 10 м (6×6), 12,3 м (8×8)\nШирина – 2,55 м (6×6), 2,8 м (8×8)\nВисота – 3,7 м (6×6), 3,1 м (8×8)\nЕкіпаж – 5-6 осіб\nКалібр гармати – 155 мм\nДовжина ствола – 52 калібри\nДальність пострілу – 42 км звичайними снарядами, 50 км активно-реактивними\nЗапас ходу – 600 км\nМаксимальна швидкість – 100 км/год (на дорозі), 50 км/год (по бездоріжжю)', 3, '/1664019811_SAU_caesar.jpeg', '2022-09-24 11:43:31', 6),
(20, 'Огляд M142 HIMARS та M270 MLRS: реактивні системи залпового вогню, на які дуже чекають в Україні', 'Вже декілька тижнів назви американських систем залпового вогню M142 HIMARS та M270 MLRS раз за разом з’являються у заявах українських посадовців та представників країн-партнерів, готових надавати Україні зброю, пише mezha.media.\r\n\r\nСпочатку президент Зеленський включив M142 HIMARS у список важкого озброєння, потрібного Україні на новій фазі війни, потім заступник глави Держдепу США Вікторія Нуланд згадала «РСЗВ, які США вже поставляє», і ось Головне управління розвідки МОУ сповістило, що «ЗСУ застосували новітні зразки РСЗВ надані країнами-партнерами». Що ж це за чудо-зброя така, яку усі так чекають?\r\n\r\n\r\n\r\nM142 HIMARS та M270 MLRS – це універсальні пускові установки РСЗВ, які можуть використовувати весь спектр ракет родини Multiple Launch Rocket System Family of Munitions. Мова йде як про некеровані ракети з касетними боєприпасами, мінами чи «розумними бомбами», так і про керовані кластерні боєприпаси, керовані ракети малої та середньої дальності. Перл цієї родини – балістична ракета середньої дальності MGM-140 ATACMS з бойовим радіусом 300 км, яка може дістати до прифронтових аеродромів та складів рашистів.\r\n\r\nВідрізняє M270 MLRS та M142 HIMARS шасі та новизна. M270 MLRS проєктувалась наприкінці 1970-х років, стала на озброєння у 1983 р. та має гусеничне шасі від БМП M2 Bradley. M142 HIMARS розробляли у другій половині 1990-х, і вона почала поступати до підрозділів у 2002 році. Крім того, HIMARS відразу розроблялася як високомобільна система, саме абревіатура HIMARS розшифровується як High Mobility Artillery Rocket System – високомобільна артилерійська ракетна система. Тому M142 HIMARS побудована на шасі армейської вантажівки M1140 (це модифікація австрійського Steyr 12M18).\r\n\r\n\r\n\r\nM270 MLRS несе два універсальних блоки на 6 некерованих/керованих ракет калібру 227-мм кожен (або на одну MGM-140 ATACMS діаметром 610 мм); M142 HIMARS – лише один такий пакет. Ракети знаходяться в уніфікованих транспортно-пускових контейнерах, які зручно зберігати, транспортувати, та перезаряджати. M270 MLRS може випустити 12 ракет пакету за хвилину, HIMARS треба вдвічі менше часу. Використання колісного шасі, швидке розгортання та згортання комплексу, цифрове керування вогнем дозволяють M142 HIMARS використовувати тактику бий-та-тікай, яку так любить ЗСУ. M270, яка має гусеничне шасі, трохи менш мобільна.\r\n\r\n\r\n\r\nM142 HIMARS досить нова система, тому ще не потребує модифікацій, а ось M270 MLRS вже декілька разів апгредили. У 2005 р. M270A1 отримала нову систему керування вогнем та нову механічну частину пускової, що дозволило РСЗО використовувати керовані боєприпаси. А ось M270C1 взагалі отримала систему керування вогнем від HIMARS. M270D1 – ще одне оновлення і знову у частині керування вогнем – цього разу під ракети з наведенням по GPS, оновили комп’ютер, дисплеї, GPS-антену, систему дистанційного керування. Тобто навіть «стара» M270 – це цілком сучасна зброя.\r\n\r\nВ залежності від модифікації ракет калібру 227-мм системи M270 MLRS та M142 HIMARS можуть вражати цілі на відстані 32-70 км, а з ракетою підвішеної дальності GMLRS-ER навіть і 150 км, шкода, що ці боєприпаси розпочали виробляти лише у 2022 р.\r\n\r\n\r\n\r\nMGM-140 ATACMS – це зовсім інша справа, ця ракета б’є на 300 км. Модифікація Precision Strike Missile (PrSM), яку зараз тестують, навіть на 499 км (не 500 км, тому що це вже порушення Договору про ліквідацію ракет середньої та малої дальності). ATACMS летить по балістичній траєкторії, підіймаючись до висоти 50 км, зі швидкістю 1 км/с (3 Маха), має інерційне та GPS-наведення. Гарне доповнення до нашої «Точки-У», яке дозволить розшугати авіацію Росії з аеродромів біля кордонів України.\r\n\r\nДостеменно не відомо чи вже прибули M270 MLRS та M142 HIMARS в Україну, чи це лише елемент психологічної операції, тому що артилеристів ще треба навчити роботі з американською технікою. Але після вчорашньої зустрічі на базі Рамштайн ніяких сумнівів, що врешті-решт Україна таки отримає американські РСЗО, вже нема. І це добре.\r\n\r\n\r\n\r\nХарактеристики M270 MLRS\r\nВага – 25 т\r\nДовжина – 6,85 м\r\nШирина – 2,97 м\r\nВисота – 2,59 м\r\nЕкіпаж – 3\r\nКалібр – 227 мм\r\nКількість ракет – 12×227 мм, або 2×MGM-140 ATACMS\r\nТемп стрільби – 18 пострілів / хв\r\nЕфективна дальність стрільби –32-70 км (ракети калібру 227 мм), до 300 км (MGM-140 ATACMS) до 499 км (Precision Strike Missile)\r\nДвигун – дизель Cummins\r\nПотужність – 500 к.с.\r\nДальність руху – 480 км\r\nМаксимальна швидкість – 64 км/год\r\n\r\n\r\n\r\nТехнічні характеристики M142 HIMARS\r\nВага – 16,25 т\r\nДовжина – 7 м\r\nШирина – 2,4 м\r\nВисота – 3,2 м\r\nЕкіпаж – 3\r\nКалібр – 227 мм\r\nКількість ракет – 6×227 мм, або 1×MGM-140 ATACMS\r\nТемп стрільби – 18 пострілів / хв\r\nЕфективна дальність стрільби –32-70 км (ракети калібру 227 мм), до 300 км (MGM-140 ATACMS), до 499 км (Precision Strike Missile)\r\nДальність руху – 480 км\r\nМаксимальна швидкість – 85 км/год\r\n\r\n\r\n\r\nТехнічні характеристики ракети MGM-140 ATACMS\r\nВага – 1670 кг\r\nДовжина – 4 м\r\nДіаметр – 610 мм\r\nМаксимальна дальність стрільби – 300 км, до 499 км (Precision Strike Missile)\r\nРозмах крил – 1,4 м\r\nСтеля – 50 км\r\nМаксимальна швидкість – 3 Маха (1 км/с)\r\nКерування – інерціальна навігація та GPS\r\nПлатформи – M270 MLRS, M142 HIMARS', 2, '/1664019914_MLRS.jpeg', '2022-09-24 11:45:14', 6),
(21, 'АКТУАЛЬНІ ПРЯМІ МІДІ АБО МАКСІ СПІДНИЦІ ДЛЯ ХОЛОДНОЇ ПОРИ’ 2021/2022', 'Прямий довгий силует, що нагадує колону, залишається в тренді. Навіть сучасні спідниці-олівці візуально наблизилися до нього: довжина нижче колін, без сильного звуження донизу та прилягання, часто із розрізом. Чудовий вибір як для офісу, ділових зустрічей, так і розслаблених комбінацій на щодень.\r\n\r\nПідбираючи взуття до спідниці в осінньо-зимовий період, мимоволі схиляєшся до варіантів, що забезпечують найбільше тепло. Перші серед них – високі чоботи, в яких почуваєшся стильною і при цьому не ризикуєш перетворитися на льодяну статую. Коли взуття наближене по тону до спідниці й заходить під її поді́л, по-перше, вам не холодно, по-друге, не дробиться силует.', 1, '/1664020311_skirts.png', '2022-09-24 11:51:51', 5),
(22, 'АКТУАЛЬНІ МІНІ СПІДНИЦІ ДЛЯ ХОЛОДНОЇ ПОРИ’ 2021/2022', 'Спідниці міні у 2021-му заявляють про себе на повну і не зійдуть з модного п’єдесталу й 2022-го року. Для осені та зими обирайте моделі з цупкого матеріалу, що тримає форму. Наприклад, шкіри або її замінника, твіду, деніму, шерсті тощо. Слід тільки визначитися з силуетом: прямим чи А-подібним . Зауважимо, що на округлих стегнах чудово сидітиме міні А-силуету. Якщо ж форми виражені менше, на них добре виглядатиме і міні-трапеція, і міні-прямокутник.\r\n\r\nТакож у тренді короткі спідниці яскравих кольорів. Вони візуально дещо розширюватимуть зону стегон, що в разі потреби допоможе збалансувати об’єм у верхній частині тіла. Актуальний декор – невеликі розрізи на одній чи обох ногах. Спокусливий характер мініспідниці врівноважить об’ємний верх, взуття на низькому ходу. Ажурні чи з візерунком колготки засвідчать вашу модну поінформованість. А от змерзнути не дадуть довгий верхній одяг та високі черевики або ботфорти на грубій підошві.', 1, '/1664020426_mini_skirts.png', '2022-09-24 11:53:46', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_admin`, `name`, `surname`) VALUES
(1, 'usicheck@gmail.com', '$2y$10$byqyi4kcJmzOs5tmfe2MRe8/9HCt34R5iIZlHgmo.3iaHkJpsLQyq', 1, 'Yaroslava', 'Kurbatova'),
(2, 'yaroslava@gmail.com', '$2y$10$nIejQ7wLx/zfmY.D/0EA3.0kIEVLE6mM1Nq5iiCqYGIs5gZ0SHMmq', 0, 'Yasia', 'Yasiantiy'),
(3, 'vasya@gmail.com', '$2y$10$wPOU4OCI5M2.tpExsrqG8eIkLlSptgUk2QDeQw6lMZ/eEh8Tj.AVW', 0, 'Vasya', 'Vasya');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id_fk` (`author_id`),
  ADD KEY `category_fk` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `author_id_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
