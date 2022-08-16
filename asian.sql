-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2022 at 11:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asian`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) UNSIGNED NOT NULL,
  `brand_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(7, ' SAMYANG'),
(9, 'Aroy-D'),
(2, 'Marukawa'),
(8, 'Nongshim'),
(1, 'Pocky'),
(5, 'Ramune'),
(10, 'SanBonsai'),
(4, 'Sangaria'),
(6, 'Seicha Matcha'),
(3, 'Yukiguni');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `cart_good_id` int(11) UNSIGNED DEFAULT NULL,
  `cart_good_count` int(11) UNSIGNED NOT NULL,
  `cart_order_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_good_id`, `cart_good_count`, `cart_order_id`) VALUES
(1, 2, 1, 1),
(2, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Лапша'),
(4, 'Напитки'),
(3, 'Сладости'),
(2, 'Снеки');

-- --------------------------------------------------------

--
-- Table structure for table `connects`
--

CREATE TABLE `connects` (
  `connect_id` int(10) UNSIGNED NOT NULL,
  `connect_token` char(32) NOT NULL,
  `connect_user_id` int(10) UNSIGNED NOT NULL,
  `connect_token_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connects`
--

INSERT INTO `connects` (`connect_id`, `connect_token`, `connect_user_id`, `connect_token_time`) VALUES
(1, '5194021b720453e1847edd27d9422e63', 2, '2022-02-25 17:58:55'),
(2, '19e367d71b83ec4967be41a72c8a6032', 3, '2022-02-26 16:38:40'),
(10, 'a7e310751ed89840007edad1ab467983', 11, '2022-03-05 04:24:58'),
(11, '72830b3b7b0a46398cd17a7b6467a5cb', 12, '2022-03-05 04:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) UNSIGNED NOT NULL,
  `country_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(4, 'Вьетнам'),
(1, 'Китай'),
(2, 'Корея'),
(3, 'Япония');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fback_id` int(10) UNSIGNED NOT NULL,
  `fback_text` longtext NOT NULL,
  `fback_user_email` varchar(45) NOT NULL,
  `fback_is_handled` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `good_id` int(11) UNSIGNED NOT NULL,
  `good_cat_id` int(11) UNSIGNED DEFAULT NULL,
  `good_country_id` int(11) UNSIGNED DEFAULT NULL,
  `good_brand_id` int(11) UNSIGNED DEFAULT NULL,
  `good_name` varchar(255) NOT NULL,
  `good_price` float(6,2) UNSIGNED NOT NULL,
  `good_amount` int(11) NOT NULL,
  `good_img` varchar(255) NOT NULL,
  `good_descr` longtext NOT NULL,
  `good_is_del` int(11) NOT NULL,
  `good_on_site` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`good_id`, `good_cat_id`, `good_country_id`, `good_brand_id`, `good_name`, `good_price`, `good_amount`, `good_img`, `good_descr`, `good_is_del`, `good_on_site`) VALUES
(1, 2, 3, 2, 'Водоросли морские сушеные прессованные Нори 5 листов, 11 г', 203.50, 12, 'assets/img/nori1.png', 'В составе только водоросли высшей категории, вкус натуральный морской, с приятным ароматом водорослей. Ровные листы без дырочек и вкраплений.  Наши водоросли аккуратно упакованы в пакет и специальную коробочку, которая не позволяет водорослям ломаться или крошиться. Одной упаковки хватает для приготовления 10 роллов.', 0, 1),
(2, 2, 3, 9, 'Водоросли морские нори для приготовления роллов, Тидори, 100л', 900.00, 50, 'assets/img/nori2.png', 'Благородные изумрудно-зеленые водоросли выигрышно смотрятся при приготовлении закусок и сервировке блюд, а также удобны для приготовления суши и роллов.', 0, 1),
(3, 2, 3, 3, 'Чипсы, снеки TOHATO острые со вкусом перца хабанеро', 355.50, 10, 'assets/img/crisps1.png', 'Картофельные чипсы от известной японской марки Tohato- производителя закусок. Чипсы из натурального картофеля с добавлением пасты из острого перца Хабанеро. Хрустящая текстура и натуральные качественные ингредиенты! Идеальное сочетание свежего вкуса и оригинальная закуска к вашему столу . Насладитесь изысканным классическим японским вкусом.', 0, 1),
(4, 2, 2, 8, 'Чипсы с кальмаром Nongshim,(4 шт. по 55 г)', 102.50, 33, 'assets/img/crisps2.png', 'Чипсы из Кореи – это оригинальный дизайн, хрустящая текстура и целый букет экзотических приправ, обеспечивающих интересное изменение послевкусия. А еще – набор витаминов и микроэлементов. Ведь существенное отличие азиатских снэков от вредного фаст-фуда – способ приготовления, при котором не используется раскаленное масло. Чипсы запекаются в печи при высокой температуре – никаких масляных разводов и жирных рук!\r\nПривлекательный вариант для тех, кто любит необычные формы и вкусы – чипсы со вкусом кальмара. Они обогащены таурином и изготовлены в форме маленьких морских обитателей. Для окраски использованы натуральные пищевые красители, безопасные для здоровья. Весело, задорно, и очень нравится малышам!', 0, 1),
(5, 2, 2, 8, 'Чипсы креветочные острые Nongshim,(4 шт. по 75 г)', 350.50, 65, 'assets/img/crisps3.png', 'Горячие и острые креветочные чипсы Нонгшим – то, что нужно для перекуса или теплой дружеской встречи! Они отлично сочетаются с пивом и холодными безалкогольными напитками: взрыв ярких вкусов и ароматов гарантирован! В состав чипсов входят креветки, анчоус и тунец, а также знаменитая корейская приправа кимчи. Лук, чеснок, и перец чили – вам станет по-настоящему жарко!\r\nОсобенностью продукции Нонгшим является безопасность для здоровья: корейский производитель использует технологию запекания чипсов при высокой температуре в специальной печи, а не жарку во фритюре. Благодаря этому продукт не пачкает рук, не крошится, не ломается, и не имеет неприятной маслянистой текстуры. Хрустящая пшеничная соломка сохранит фигуру, а прочная упаковка позволяет без опаски брать чипсы на прогулку или в поездку – пакет не порвется в сумке или рюкзаке.\r\nОстрые чипсы отлично сочетаются с традиционными азиатскими соусами. Оригинальное решение – подать чипсы вместо хлеба или лаваша к мясному или рыбному барбекю. Еще один вариант – добавить чипсы в салат или суп вместо сухариков.', 0, 1),
(6, 2, 2, 8, 'Чипсы НонгШим луковые с перцем (5 шт. по 40 г)', 423.00, 21, 'assets/img/crisps4.png', 'Чипсы из луковых колец - идеальная закуска.\r\nЛуковые колечки с хрустящей корочкой из кляра со вкусом жгучего перца.', 0, 1),
(7, 2, 2, 8, 'Чипсы Тако с морепродуктами Nongshim,(4 шт. по 60 г)', 403.50, 22, 'assets/img/crisps5.png', 'Корейский производитель Nongshim – признанный мировой лидер по производству премиальных продуктов быстрого приготовления и снеков. Чипсы Тако с морепродуктами порадуют и взрослых, и детей оригинальным вкусом и дизайном: пластинки имеют забавную форму маленьких осьминогов.\r\nИзготовленные из пшеничной муки с добавлением экстракта морепродуктов и интересного букета специй, чипсы Тако обладают насыщенным вкусом и ароматом, небольшой степенью остроты (идеально для тех, кто не любит обилие перца). Эластичное тесто, запеченное в печи, а не во фритюре, не содержит трансжиров, не крошится и не ломается. Золотистый снек с хрустящей корочкой – прекрасная закуска для слабоалкогольных и безалкогольных напитков, а также оригинальное дополнение к праздничному столу', 0, 1),
(8, 3, 3, 1, 'Pocky / Набор печенья Pocky (Strawberry Flavour 45 гр., Double Choco 47 гр., Choco Banana 42 гр.) 3шт', 434.50, 13, 'assets/img/pocky.png', 'Вы когда-нибудь пробовали азиатскую сладость, которая передаёт неимоверный вкус яркого и сладчайшего шоколада, такой аромат запомнит абсолютно любой человек, тем более если он любит сладкое.\r\n\r\n1) Pocky Double Choco. Палочки в виде соломки, покрытой двойным слоем шоколада. Идеальное дополнение к чаю или кофе. Не оставят равнодушным любителей шоколадных начинок.\r\n\r\n2) Pocky Choco Banana. Шоколадно-банановое удовольствие для сладкоежек. Нежная хрустящая соломка из бисквитного какао-печенья с банановой глазурью. Яркий аромат спелых бананов, нежность бисквита и хрустящая текстура печенья не могут не понравится.\r\n\r\n3) Pocky Strawberry Flavour окутает вас восхитительным ароматом спелой клубники. Нежный крем в сочетании с соломкой подарит вам незабываемый кисло-соленый вкус. Необычное сочетание подойдет любителям розового и клубники. Сделано в Таиланде. Обратите внимание! Вы покупайте сразу ТРИ пачки азиатского удовольствия.', 0, 1),
(9, 3, 3, 1, 'Бисквитные палочки Pocky: клубничный крем 45гр, шоколад и банан 42гр, печенье и крем 40гр', 468.00, 15, 'assets/img/pocky1.png', 'Набор бисквитных палочек Pocky с самыми популярными вкусами. Идеально подойдет как для подарка, так и для себя. Хрустящий бисквит покрытый тонким слоем глазури с кусочками печенья и фруктов.', 0, 1),
(10, 3, 3, 1, 'Бисквитные палочки Pocky Green Tea - зелёный чай, 33 г (3 шт)\r\n', 350.00, 29, 'assets/img/pocky2.png', 'Самые популярные палочки в Японии - Pocky Green Tea Matcha с кремом из зелёного чая. Вы почувствуете восхитительную и экзотическую Японию на кончиках этих бисквитных палочек, пропитанных вкусом зелёного азиатского чая.\r\nКрайне удивительный и совершенно необычный вкус шоколадной глазури со вкусом зелёного чая - это интригующая \"фишка\" этой вкусняшки. Она несомненно впечатлит даже самого искушённого человека. А сама основа палочки Pocky Green Tea Matcha - этот свежайший бисквит, с приятным похрустыванием вознесёт Вас прямо на небеса.', 0, 1),
(11, 3, 3, 1, 'Pocky Colourful Limited Edition / Шоколадные палочки Покки Калорфул лимитированная серия 36 гр 2 шт', 390.00, 10, 'assets/img/pocky3.png', 'Pocky Colorful - это лимитированное издание знаменитых японских палочек-печений. Бисквитные палочки в лимонном креме с разноцветной сахарной посыпкой. От уникального вкуса вам захочется скушать всю пачку целиком. Также палочки идеально подойдут для кондитерских изделий в качестве украшения. Картонная упаковка сохранит свежесть палочек Pocky надолго.', 0, 1),
(12, 3, 3, 2, 'Десерт рисовое Моти Royal Family Taro Mochi с бататом, 120г', 272.50, 31, 'assets/img/mochi.png', 'Моти - традиционные японские сладости на основе риса. Они изготваливаются особым образом и подаются к чайной церемонии.\r\nЭти моти - с бататом. Одним из самых полезных из известных продуктов.', 0, 1),
(13, 3, 3, 5, 'Пирожное Моти с соком персика Хакуто (2 шт. по 160 г), Япония', 300.50, 9, 'assets/img/mochi2.png', 'Японские пирожные с натуральным персиковым соком, присыпанные рисовой пудрой. Десерт с давней историей, символизирующий богатство, удачу и процветание.', 0, 1),
(14, 3, 3, 3, 'Десерт рисовое Моти Дайфуку Royal Family тропическое ассорти (Манго, личи, маракуйа), 120 г.', 306.50, 13, 'assets/img/mochi3.png', 'Моти - традиционные японские сладости на основе риса. Они изготваливаются особым образом и подаются к чайной церемонии.\r\nДанный вид моти - классический. В упаковке 8-12 шт моти. Вкус - тропическое ассорти (манго, личи, маракуйа)', 0, 1),
(15, 3, 2, 3, 'Карамель Anytime со вкусом Манго', 140.00, 43, 'assets/img/candy1.png', 'Сладкая, обладающая ярким, насыщенным вкусом, леденцовая карамель из Южной Кореи. Xylitol Anytime - оригинальные конфеты, способные порадовать новыми сочетаниями продуктов даже самых опытных ценителей и истинных знатоков сладостей.', 0, 1),
(16, 3, 2, 4, 'Корейское печенье Кукудасу со вкусом Венского кофе Melange, Crown, 144г', 110.50, 11, 'assets/img/candy2.png', 'Кукудасу – это национальная корейская сладость, которая представляет собой жареное медовое печенье, пропитанное сиропом и мёдом. Традиционно тесто для печенья готовят из пшеничной муки и мёда с добавлением кунжутного масла, рисового вина и имбиря.', 0, 1),
(17, 3, 2, 2, 'Карамель леденцовая со вкусом колы Mammos, 100 г х 2 шт', 111.50, 23, 'assets/img/candy3.png', 'Яркий вкус и минимум консервантов - основа популярности корейских леденцов Mammos', 0, 1),
(18, 3, 2, 3, 'Карамель Anytime Слива-Персик', 110.50, 41, 'assets/img/candy4.png', 'Карамель, с освежающим вкусом персика и сливы. Нежность лета во всем вкусе!', 0, 1),
(19, 1, 2, 7, 'Лапша быстрого приготовления Samyang Hot Chicken Flavour Ramen Cheese со вкусом сыра, 105 г', 250.00, 22, 'assets/img/ramen1.png', 'Идеальное сочетание густого острого бульона с нежнейшей лапшой Samyang со вкусом сыра.', 0, 1),
(20, 1, 2, 7, 'Лапша быстрого приготовления Hot Chicken острая курица и крем карбонара Samyang, пачка 140 г х 4 шт', 602.00, 43, 'assets/img/ramen2.png', 'Умеренно острая лапша в линейке бренда Самянг.', 0, 1),
(21, 1, 4, 9, 'Суп быстрого приготовления ФО с говядиной VIFON/BICH HI (4 шт. по 65 г)', 198.50, 15, 'assets/img/ramen3.png', 'Классический вьетнамской суп Фо быстрого приготовления со вкусом говядины!\r\nТарелка супа Фо Бо быстрого приготовления содержит в своем составе первоклассную рисовую лапшу, аутентичные вьетнамские специи и масло.\r\nБольшая тарелка супа Фо - это сытный суп, который за счет рисовой лапши является еще и легким, низкокалорийным.', 0, 1),
(22, 1, 1, 5, 'Макароны Mai A Yi Китайская яичная лапша, 1 кг', 250.00, 11, 'assets/img/ramen4.png', 'Яичную лапшу принято считать универсальным продуктом, ведь она может выступать в качестве гарнира, составляющей супа или салата. Ее можно варить, запекать и жарить. Относится к категории круглой лапши.', 0, 1),
(23, 1, 1, 5, 'Лапша крахмальная Фунчоза (2 шт. по 500 г)', 203.50, 22, 'assets/img/ramen5.png', 'Тонкая лапша из крахмала. При варке приобретает стеклянный блеск и становится полупрозрачной.', 0, 1),
(24, 1, 3, 5, 'Макароны лапша яичная Рамен в брикетах Kekeshi, 1 кг', 434.50, 21, 'assets/img/ramen6.png', 'Один из популярнейших видов лапши в Азии. От пшеничной лапши Удон её отличает большая питательность за счёт добавления яичного порошка.', 0, 1),
(25, 1, 3, 10, 'Лапша Ниссин Удон с жареным тофу яйцом и вакамэ на рыбном бульоне (2 шт. по 106 г)', 355.50, 22, 'assets/img/ramen7.png', 'Суп с лапшой, он же — рамэн, это одно из любимых блюд в Японии, а компания Nissin самый популярный производитель лапши бп. Абсолютно натуральная японская лапша быстрого приготовления - отличный заменитель надоевшей всем лапши Доширак. Лапша премиум-класса без консервантов и искусственных красителей поможет Вам утолить голод и получить удовольствие от еды, где бы Вы ни находились!', 0, 1),
(26, 1, 1, 5, 'Макароны лапша гречневая Соба Kekeshi, 300 г', 350.00, 11, 'assets/img/ramen8.png', 'Соба Kekeshi – премиальный продукт, который раньше был доступен только поварам ресторанов. Сегодня мы представляем его и вам, чтобы он стал основой вашего творчества! Эта лапша не разваливается и не слипается, не содержит химии или ГМО, идеально впитывает вкусы и не рвется.', 0, 1),
(27, 4, 3, 5, 'Напиток газированный Рамунэ со вкусом йогурта (2 шт. по 200 мл)', 433.50, 9, 'assets/img/drink1.png', 'Рамунэ — японский газированный безалкогольный напиток. Слово имеет связь со словом «lemonade». Ramune - это лимонад в специальной бутылке. Основная «фишка» этих бутылок, вызвавшая дикий интерес у американцев и европейцев, заключается в стеклянном шарике, заменяющем пробку. Чтобы отведать напиток, пробку выталкивают внутрь. Поэтому пить напиток непривычно, так как стеклянный шарик загораживает горлышко. Причем пластиковая крышка, которая прилегает к самой бутылке, не дает возможности достать шарик из упаковки.', 0, 1),
(28, 4, 3, 5, 'Газированный напиток Ramune Lemonade, со вкусом арбуза, 200 мл', 110.50, 8, 'assets/img/drink2.png', 'Рамунэ — японский газированный безалкогольный напиток. Слово имеет связь со словом «lemonade». Ramune - это лимонад в специальной бутылке. Основная «фишка» этих бутылок, вызвавшая дикий интерес у американцев и европейцев, заключается в стеклянном шарике, заменяющем пробку. ', 0, 1),
(29, 4, 2, 2, 'Напиток Тоник Jinro Mixer (4 шт. по 300 мл)', 468.00, 10, 'assets/img/drink3.png', 'Качественный тоник известной корейской торговой марки Джинро для приготовления коктейлей со сбалансированным нейтральным вкусом.', 0, 1),
(30, 4, 2, 4, 'NATURE\'s MANGO напиток сокосодержащий манговый Nature\'s 180мл*2шт.', 330.50, 33, 'assets/img/drink4.png', 'Манговый напиток \"Nature\'s\"  - это польза настоящих тропических фруктов. Имеет яркий запоминающийся вкус, утоляет жажду и поднимает настроение.', 0, 1),
(31, 1, 2, 7, 'Лапша быстрого приготовления Samyang Hot Chicken Flavour Ramen Cheese со вкусом сыра, 105 г', 250.00, 22, 'assets/img/ramen1.png', 'Идеальное сочетание густого острого бульона с нежнейшей лапшой Samyang со вкусом сыра.', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) UNSIGNED NOT NULL,
  `order_user_id` int(11) UNSIGNED DEFAULT NULL,
  `order_status_id` int(11) UNSIGNED DEFAULT NULL,
  `order_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_user_id`, `order_status_id`, `order_creation`) VALUES
(1, 3, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'common_user'),
(2, 'admin'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) UNSIGNED NOT NULL,
  `status_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(3, 'в доставке'),
(4, 'выполнено'),
(2, 'не оплачено'),
(1, 'оплачено');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_fname`, `user_lname`, `user_role_id`, `user_pass`) VALUES
(1, 'test@mail.ru', '', '', NULL, '202cb962ac59075b964b07152d234b70'),
(2, 'test1@mail.ru', '', '', NULL, 'e10adc3949ba59abbe56e057f20f883e'),
(3, '123456@mail.ru', '', '', NULL, '698d51a19d8a121ce581499d7b701668'),
(11, 'ywawsw@kdsod.com', '', '', NULL, '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'admin@ad.com', '', '', NULL, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_good_id` (`cart_good_id`),
  ADD KEY `cart_good_count` (`cart_good_count`),
  ADD KEY `cart_order_id` (`cart_order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`connect_id`),
  ADD KEY `connect_user_id` (`connect_user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country_name` (`country_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fback_id`),
  ADD KEY `fback_user_id` (`fback_user_email`),
  ADD KEY `fback_user_id_2` (`fback_user_email`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`good_id`),
  ADD KEY `good_cat_id` (`good_cat_id`),
  ADD KEY `good_country_id` (`good_country_id`),
  ADD KEY `good_brand_id` (`good_brand_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user_id` (`order_user_id`),
  ADD KEY `order_status_id` (`order_status_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `status_name` (`status_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_pass` (`user_pass`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `connects`
--
ALTER TABLE `connects`
  MODIFY `connect_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fback_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `good_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_good_id`) REFERENCES `goods` (`good_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cart_order_id`) REFERENCES `orders` (`order_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `connects`
--
ALTER TABLE `connects`
  ADD CONSTRAINT `connects_ibfk_1` FOREIGN KEY (`connect_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`good_cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`good_country_id`) REFERENCES `countries` (`country_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_ibfk_3` FOREIGN KEY (`good_brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_status_id`) REFERENCES `status` (`status_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`role_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
