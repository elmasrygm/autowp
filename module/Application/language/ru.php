<?php

return array_replace(include 'root.php', [
    '' => [
        'plural_forms' => 'nplurals=3; plural=((n%10==1)&&(n%100!=11))?0:(((n%10>=2)&&(n%10<=4)&&((n%100<10)||(n%100>=20)))?1:2)'
    ],

    'test' => 'тест прошел успешно',

    /* Common words */
    'and' => 'и',
    '%1$s pictures'       => [
        '%1$s изображение',
        '%1$s изображения',
        '%1$s изображений'
    ],
    'ng/%1$s-pictures' => '{count, plural,
        one {{count} изображение}
        few {{count} изображения}
        many {{count} изображений}
        other {{count} изображений}
    }',
    '%1$s items'      => [
        '%1$s единица данных',
        '%1$s единицы данных',
        '%1$s единиц данных'
    ],
    '%1$s vehicles'      => [
        '%1$s автомобиль',
        '%1$s автомобиля',
        '%1$s автомобилей',
    ],
    '%1$s comments'      => [
        '%1$s комментарий',
        '%1$s комментария',
        '%1$s комментариев',
    ],
    'ng/%1$s-comments' => '{count, plural,
        one {{count} комментарий}
        few {{count} комментария}
        many {{count} комментариев}
        other {{count} комментариев}
    }',
    '%1$s messages'      => [
        '%1$s сообщение',
        '%1$s сообщения',
        '%1$s сообщений',
    ],
    '%1$s topics'      => [
        '%1$s тема',
        '%1$s темы',
        '%1$s тем',
    ],

    'year' => 'Год',
    'month' => 'Месяц',

    'contributor' => 'составитель',
    'contributors' => 'составители',

    'deleted-user' => 'удалённый пользователь',

    'submit' => 'Отправить',

    /* Layout */
    'layout/meta/description' => 'Энциклопедия автомобилей в картинках. AutoWP.ru',
    'layout/meta/keywords' => 'car, vehicle, auto, avto, автомобиль',
    'layout/brand' => 'AutoWP.ru',
    'layout/personal-messages' => 'Личные сообщения',
    'layout/you-have-%1$s-new-messages' => [
        'У вас %1$s новое сообщение',
        'У вас %1$s новых сообщения',
        'У вас %1$s новых сообщений',
    ],
    'ng-layout/you-have-new-messages' => '{messages, plural,
        one {У вас {messages} новое сообщение}
        few {У вас {messages} новых сообщения}
        many {У вас {messages} новых сообщений}
        other {У вас {messages} новых сообщений}
    }',

    'layout/search' => 'Поиск',
    'layout/footer' => 'Обращаем ваше внимание на то, что все материалы, размещенные на сервере autowp.ru, добавлены посетителями сайта.

Администрация сайта не располагает информацией о правомерности публикования этих материалов.

Все изображения размещены в ознакомительных целях.

[Сообщить о нарушении авторских прав](mailto:autowp@yandex.ru)',

    'layout/language-contributing' => 'Хотите помочь?',

    /* Picture preview */
    'picture-preview/no-comments' => 'нет',
    'picture-preview/no-ratio'    => 'нет',
    'picture-preview/crop-desc'   => 'На картинке выделена область автомобиля',
    'picture-preview/special-name' => 'Картинке задано особое название',
    'Resolution'                  => 'Разрешение',
    'Filesize'                    => 'Размер',
    'Ratio'                       => 'Оценка',
    'Views'                       => 'Просмотров',
    'Comments count'              => 'Комментариев',

    /* SPECIFICATIONS*/
    'rpm' => 'об/мин',
    'Nm'  => 'Нм',
    'kW'  => 'КВт',
    'hp'  => 'л.с.',
    'spec/%1$s-gear' => [
        '%1$s передача',
        '%1$s передачи',
        '%1$s передач',
    ],

    /* PAGINATOR */
    'next'     => 'следующая',
    'previous' => 'предыдущая',

    /* INDEX */
    'index/brands'             => 'Компании',
    'index/factories'          => 'Заводы',
    'index/specifications'     => 'Характеристики',
    'index/twins/description' => 'Вы знаете, что Daewoo Matiz имеет аж целых [шесть клонов](/twins/group118812)? А знаете, что [общего у Lotus и Kia](/twins/group118750)? Уверены, что вам покажется интересным этот раздел.',
    'index/categories/description' => 'А знаете ли вы, какая техника помогала блюсти правопорядок на улицах мировых городов в разное время? А на каких автомобилях ездил Папа Римский? Нет? Тогда вам точно в этот раздел.',
    'index/categories/mosts' => 'Хотите знать, какой автомобиль был самым быстрым? Хотите знать, сколько весит самый могучий карьерный самосвал? Заходите и узнаете.',

    'mosts/fastest/roadster'          => 'Самые быстрые родстеры',
    'mosts/mighty/sedan/today'        => 'Самые мощные седаны нашего времени',
    'mosts/dynamic/universal/2000-09' => 'Самые динамичные универсалы 2000ых',
    'mosts/heavy/truck'               => 'Самые тяжелые грузовики',

    'back'    => 'назад',
    'forward' => 'вперед',

    'Picture of the day'       => 'Картинка дня',
    'car-of-day'               => 'автомобиль дня',
    'theme-of-day'             => 'тема дня',
    'day ahead'                => 'день вперед',
    'day ago'                  => 'день назад',
    'Cars by destination'      => 'Автомобили по назначению',
    'All new pictures'         => 'все новые картинки',

    'all-link'                 => 'все',

    'brands/new-cars-of-brand' => 'Новые автомобили %s',

    'brands/more-companies'    => [
        'ещё %s компания',
        'ещё %s компании',
        'ещё %s компаний'
    ],
    'brands/pictures:' => 'изображений: ',

    'item/type/1/name' => 'ТС',
    'item/type/1/name-plural' => 'ТС',
    'item/type/1/new-item' => 'Новое ТС',
    'item/type/1/add-sub-item' => 'Добавить подраздел',
    'item/type/2/name' => 'Двигатель',
    'item/type/2/name-plural' => 'Двигатели',
    'item/type/2/new-item' => 'Новый двигатель',
    'item/type/2/add-sub-item' => 'Добавить подраздел',
    'item/type/3/name' => 'Категория',
    'item/type/3/name-plural' => 'Категории',
    'item/type/3/new-item' => 'Новая категория',
    'item/type/3/add-sub-item' => 'Добавить подкатегорию',
    'item/type/4/name' => 'Близнецы',
    'item/type/4/name-plural' => 'Близнецы',
    'item/type/4/new-item' => 'Новая группа близнецов',
    'item/type/4/add-sub-item' => 'Добавить подгруппу близнецов',
    'item/type/5/name' => 'Марка',
    'item/type/5/name-plural' => 'Марки',
    'item/type/5/new-item' => 'Новая марка',
    'item/type/5/add-sub-item' => 'Добавить подмарку',
    'item/type/6/name' => 'Завод',
    'item/type/6/name-plural' => 'Заводы',
    'item/type/6/new-item' => 'Новый завод',
    'item/type/6/add-sub-item' => 'Добавить под-завод',
    'item/type/7/name' => 'Музей',
    'item/type/7/name-plural' => 'Музеи',
    'item/type/7/new-item' => 'Новый музей',
    'item/type/7/add-sub-item' => 'Добавить под-музей',

    'item/type/8/name' => 'Персона',
    'item/type/8/name-plural' => 'Персоны',
    'item/type/8/new-item' => 'Новая персона',
    'item/type/8/add-sub-item"' => 'Добавить суб-персону',

    /* BRAND PAGE*/
    'unsorted'                => 'Несортировано',
    'engines'                 => 'Двигатели',
    'concepts and prototypes' => 'Концепты и прототипы',
    'logotypes'               => 'Логотипы',
    'mixed'                   => 'Разное',

    'count 0'    => 'нет',

    /* CAR LIST */
    'carlist/no-photo'       => 'Нет фотоматериалов',
    'carlist/no-photo/add'   => 'Добавить фотографию',
    'carlist/all pictures'   => 'все картинки',
    'carlist/details'        => 'подробнее',
    'carlist/twins'          => 'автомобили-близнецы',
    'carlist/produced/one'   => 'Произведен в единственном экземпляре',
    'carlist/produced/%1$s'  => [
        'Произведена %1$s единица',
        'Произведены %1$s единицы',
        'Произведено %1$s единиц'
    ],
    'carlist/produced-about/%1$s' => [
        'Произведена примерно %1$s единица',
        'Произведены примерно %1$s единицы',
        'Произведено примерно %1$s единиц'
    ],
    'carlist/specifications' => 'технические характеристики',
    'carlist/designed by %s'  => 'дизайн %s',
    'carlist/edit-specs' => 'ввод ттх',
    'carlist/years' => 'года выпуска',
    'carlist/model-years' => 'модельный год',

    'picturelist/engine' => 'Engine',
    'picturelist/engine-%s' => 'Двигатель %s',
    'picturelist/factory' => 'Завод',

    'present-time-abbr'      => 'н.в.',

    /* Categories */
    'category/%s cars'       => [
        '%s автомобиль',
        '%s автомобиля',
        '%s автомобилей'
    ],
    'category/%s new cars'   => [
        '%s новый',
        '%s новых',
        '%s новых'
    ],

    /* most */
    'most/fastest' => 'быстрые',
    'most/fastest/param' => 'максимальная скорость',
    'most/slowest' => 'медленные',
    'most/slowest/param' => 'максимальная скорость',
    'most/dynamic' => 'динамичные',
    'most/dynamic/param' => 'разгон',
    'most/static' => 'инертные',
    'most/static/param' => 'разгон',
    'most/mighty' => 'мощные',
    'most/mighty/param' => 'мощность двигателя',
    'most/weak' => 'слабые',
    'most/weak/param' => 'мощность двигателя',
    'most/big-engine' => 'большие двигатели',
    'most/big-engine/param' => 'объем двигателя',
    'most/small-engine' => 'маленькие двигатели',
    'most/small-engine/param' => 'объем двигателя',
    'most/nimblest' => 'ловкие',
    'most/nimblest/param' => 'диаметр разворота',
    'most/economical' => 'экономичные',
    'most/economical/param' => 'расход топлива в смешанном цикле',
    'most/gluttonous' => 'прожорливые',
    'most/gluttonous/param' => 'расход топлива в смешанном цикле',
    'most/clenaly' => 'экологичные',
    'most/clenaly/param' => 'выбросы',
    'most/dirty' => 'неэкологичные',
    'most/dirty/param' => 'выбросы',
    'most/heavy' => 'тяжелые',
    'most/heavy/param' => 'снаряженная масса',
    'most/lightest' => 'легкие',
    'most/lightest/param' => 'снаряженная масса',
    'most/longest' => 'длинные',
    'most/longest/param' => 'длина',
    'most/shortest' => 'короткие',
    'most/shortest/param' => 'длина',
    'most/widest' => 'широкие',
    'most/widest/param' => 'ширина',
    'most/narrow' => 'узкие',
    'most/narrow/param' => 'ширина',
    'most/highest' => 'высокие',
    'most/highest/param' => 'высота',
    'most/lowest' => 'низкие',
    'most/lowest/param' => 'высота',
    'most/air' => 'аэродинамичные',
    'most/air/param' => 'коэффициенты аэродинамического сопротивления',
    'most/antiair' => 'антиаэродинамичные',
    'most/antiair/param' => 'коэффициенты аэродинамического сопротивления',
    'most/bigwheel' => 'большие колеса',
    'most/bigwheel/param' => 'размеры колес',
    'most/smallwheel' => 'маленькие колеса',
    'most/smallwheel/param' => 'размеры колес',
    'most/bigbrakes' => 'большие тормоза',
    'most/bigbrakes/param' => 'размер тормозов',
    'most/smallbrakes' => 'маленькие тормоза',
    'most/smallbrakes/param' => 'размер тормозов',
    'most/bigclearance' => 'большой клиренс',
    'most/bigclearance/param' => 'дорожный просвет',
    'most/smallclearance' => 'маленький клиренс',
    'most/smallclearance/param' => 'дорожный просвет',

    'mosts/sidebar/mostly…' => 'Самые …',
    'mosts/sidebar/between…' => 'Среди …',

    'mosts/period/before1920' => 'до 1920го',
    'mosts/period/1920-29'    => '1920-29ых',
    'mosts/period/1930-39'    => '1930-39ых',
    'mosts/period/1940-49'    => '1940-49ых',
    'mosts/period/1950-59'    => '1950-59ых',
    'mosts/period/1960-69'    => '1960-69ых',
    'mosts/period/1970-79'    => '1970-79ых',
    'mosts/period/1980-89'    => '1980-89ых',
    'mosts/period/1990-99'    => '1990-99ых',
    'mosts/period/2000-09'    => '2000-09ых',
    'mosts/period/2010-16'    => '2010-16ых',
    'mosts/period/present'    => 'нашего времени',
    'mosts/period/all-time'   => 'за всю историю',

    /* upload */
    'upload/image-file' => 'Файл картинки',
    'upload/note' => 'Примечание к изображению',
    'upload/picture/crop' => 'кадрировать',
    'upload/picture/cropped-to' => 'кадрировано %s',
    'upload/select/unsorted' => 'несортировано',
    'upload/select/unsorted-long' => 'несортировано (автомобиль или двигатель, которого нет на сайте)',
    'upload/select/mixed' => 'разное',
    'upload/select/mixed-long' => 'разное (несколько автомобилей на одной картинке)',
    'upload/select/logo' => 'логотип',
    'upload/select/engines' => 'Двигатели',
    'upload/select/concepts' => 'Концепты и прототипы',
    'upload/select/other-modification' => 'другая модификация',

    'upload/add-picture' => 'Добавить изображение',
    'upload/select-another' => 'выбрать другую рубрику',
    'upload/description' => 'Если у вас есть изображения, которых вы не нашли на этом сайте и они соответствуют тематике сайта, то вы можете добавить их в наш каталог, воспользовавшись формой, расположенной ниже.

Было бы здорово, если бы вы указали, что за автомобиль изображён на картинке, чтобы облегчить её добавление и избежать ошибки.

Требования, предъявляемые к добавляемым картинкам:

* Формат [JPEG](http://ru.wikipedia.org/wiki/JPEG) или [PNG](http://ru.wikipedia.org/wiki/PNG). Разрешение от: 640×360 до 4096×4096.
* Изображение должно по возможности быть максимально доступного качества, не содержать различных артефактов изменения размера или компрессии (размытия, нечёткости, расплытия цветов, ребристости прямых линий и т.д.). Исключение составляют редкие фото(производителя), сканы из проспектов. Решение об оставлении такого фото на сайте принимает модераторский состав.
* Отсутствие надписей и логотипов посторонних сайтов, нанесенных не авторами/владельцами материала.
* Автомобиль должен иметь первоначальный вид как при выходе с завода. Не должны присутствовать признаки <em>самодельного тюнинга</em>, желательно отстутвие изменений, связанных со старением автомобиля.
* Основной и единственной темой изображения должен являться автомобиль, двигатель, логотип автокомпании, автомобильный завод или музей. Наличие в кадре посторонних предметов или людей - нежелательно.
* Любительские фотографии вашего автомобиля, автомобиля ваших друзей или любого другого, встретившегося вам на улице, а также фотографии с выставок - не будут приняты на сайт 100%. Если только вы не профессионал.
* Для первых фотографий автомобиля возможны пониженные требования.

**Убедительная просьба**, перед добавлением изображений, убедиться в их отсутствии в каталоге.

Обращаем ваше внимание на то, что добавление картинок модерируемое. Т.е. все картинки перед добавлением в каталог будут проверены ведущими сайта.',
    'upload/only-registered' => 'Только зарегистрированный пользователи могут загружать изображения

[Авторизируйтесь](/ng/login) или [зарегистрируйтесь](/ng/signup)',

    /* catalogue */
    'catalogue/other-pictures-of-%1$s' => 'Другие изображения %1$s',
    'catalogue/all-pictures-of-%1$s' => 'Все изображения %1$s',
    'catalogue/brand/logo-of-%s' => 'логотип %s',
    'catalogue/brand/links' => 'Ссылки',
    'catalogue/brand/popular-images' => 'Популярные картинки',
    'catalogue/brand/new-pictures' => 'Новые фото',
    'catalogue/brand/inbox/by-brand' => 'Инбокс бренда',
    'catalogue/brand/factories' => 'Заводы',
    'catalogue/link-category/official' => 'Официальные сайты',
    'catalogue/link-category/helper'   => 'Помогли созданию проекта',
    'catalogue/link-category/club'     => 'Автомобильные клубы',
    'catalogue/link-category/default'  => 'Другие',
    'catalogue/chronological' => 'Хронология',
    'catalogue/related' => 'Связанные',
    'catalogue/related-with-%1$s' => 'Связанные с %1$s',
    'catalogue/sport' => 'Спорт',
    'catalogue/design' => 'Дизайн',
    'catalogue/stock-model' => 'стоковая модель',
    'catalogue/sub-model' => 'подвид',
    'catalogue/sport-of-%1$s' => '%1$s Спорт',
    'catalogue/specifications-of-%1$s' => 'Технические характеристики %1$s',
    'catalogue/specifications' => 'Технические характеристики',
    'catalogue/other-photos' => 'Другие фото',
    'catalogue/section/moto' => 'Мото',
    'catalogue/section/tractors' => 'Тракторы',
    'catalogue/section/buses' => 'Автобусы',
    'catalogue/section/trucks' => 'Грузовые',
    'catalogue/section/engines' => 'Двигатели',

    'catalogue/engine-menu/vehicles' => 'Автомобили',
    'catalogue/engine-menu/pictures' => 'Изображения',
    'catalogue/specifications/contributors:' => 'Составители:',
    'catalogue/specifications/disclaimer' => 'Информация собрана участниками проекта. Если вы нашли ошибку или желаете заполнить пробелы, вы можете сделать это, пройдя процедуру регистрации на сайте.',
    'catalogue/vehicle/inbox' => 'инбокс',
    'catalogue/vehicle/comments' => 'комментарии',
    'catalogue/engine/add-engine' => 'добавить двигатель',
    'catalogue/engine/mounted-on:' => 'Устанавливался на:',

    'factories/factory-items' => 'Продукция',
    'factories/factory/pictures' => 'Фотографии',

    /* comments */
    'comments/title' => 'Комментарии',
    'comments/reply' => 'ответить',
    'comments/what-to-do-for-write-comments' => 'Чтобы иметь возможность оставлять комментарии, необходимо [зарегистрироваться или войти на сайт с помощью учётной записи в одной из социальных сетей](/ng/login)',
    'comments/it-requires-attention-of-moderators' => 'Требуется внимание модераторов',
    'comments/form-title' => 'Добавить комментарий',
    'comments/message' => 'Сообщение',
    'comments/send' => 'Отправить',
    'comments/cancel' => 'Отменить',
    'comments/need-wait-text' => 'К сожалению вам нужно немного подождать, чтобы получить возможность оставить комментарий.

Это связано с наличием порога "сообщений в час", необходимого для борьбы со спамом и некоторыми другими негативными моментами.

Следующий комментарий вы сможете оставить в "%s", а пока у вас есть время уточнить ту мысль, которую вы хотели донести до общественности:',

    'comments/author/anonymous' => 'Аноним',
    'comments/message-deleted-by-admin' => 'Сообщение удалено администрацией сайта',
    'comments/message/delete' => 'Удалить',
    'comments/message/restore' => 'Восстановить',
    'comments/message/move' => 'Переместить',
    'comments/vote/no-more-votes' => 'На сегодня у вас не осталось больше голосов',
    'comments/subscribe' => 'Подписаться на уведомления о сообщениях',
    'comments/unsubscribe' => 'Отписаться от уведомлений',

    /*perspectives*/
    'perspective/front'          => 'спереди',
    'perspective/back'           => 'сзади',
    'perspective/left'           => 'левый бок',
    'perspective/right'          => 'правый бок',
    'perspective/interior'       => 'интерьер',
    'perspective/front-panel'    => 'торпедо',
    'perspective/3/4-left'       => '¾ левый бок',
    'perspective/3/4-right'      => '¾ правый бок',
    'perspective/cutaway'        => 'cutaway',
    'perspective/front-strict'   => 'спереди (строго)',
    'perspective/left-strict'    => 'левый бок (строго)',
    'perspective/right-strict'   => 'правый бок (строго)',
    'perspective/back-strict'    => 'сзади (строго)',
    'perspective/n/a'            => 'n/a',
    'perspective/label'          => 'шильдик',
    'perspective/upper'          => 'сверху',
    'perspective/under-the-hood' => 'под капотом',
    'perspective/upper-strict'   => 'сверху (строго)',
    'perspective/bottom'         => 'снизу',
    'perspective/dashboard'      => 'комбинация приборов',
    'perspective/boot'           => 'багажник',
    'perspective/logo'           => 'логотип',
    'perspective/mascot'         => 'маскот',
    'perspective/sketch'         => 'эскиз',
    'perspective/mixed'          => 'разное',
    'perspective/exterior-details' => 'детали экстерьера',

    'login/sign-in' => 'Вход',
    'login/sign-out' => 'Выход',
    'login/login-or-email' => 'логин или e-mail',
    'login/captcha' => 'введите код защиты',
    'login/registration' => 'Регистрация',
    'login/forgot-password?' => 'Забыли пароль?',
    'login/success-text' => 'Рады снова приветствовать вас на нашем сайте',
    'login/remember' => 'запомнить',
    'login/sign-in-using-account' => 'Войти, используя учётную запись',
    'login/login-or-password-is-incorrect' => 'Логин или пароль неверен',
    'login/user-%value%-not-found' => 'Пользователь с именем или e-mail "%value%" не найден',

    'registration/if-you-registered' => 'Если вы уже зарегистрированы, то вам не следует делать этого снова, а нужно лишь ввести свой логин и пароль в форме справа.',

    'account/personal-message/reply' => 'ответить',
    'account/personal-message/delete' => 'удалить',
    'account/personal-message/entire-dialog' => 'вся переписка',
    'account/personal-message/system-notification' => 'Системное уведомление',
    'account/personal-message/delete-all-sent' => 'Удалить все отправленные сообщения',
    'account/personal-message/delete-all-system' => 'Удалить все уведомления',
    'account/personal-message/new' => 'новое',
    'account/personal-message/sent' => 'Сообщение отправлено',
    'account/profile/personal' => 'Личные данные',
    'account/profile/photo' => 'Фотография',
    'account/profile/photo/saved' => 'Фотография сохранена',
    'account/profile/photo/deleted' => 'Фотография удалена',
    'account/profile/use-gravatar' => 'Вы можете загрузить своё фото или использовать сервис <a href="http://gravatar.com/">Gravatar</a>',
    'account/profile/photo/delete' => 'Удалить фото',
    'account/profile/other' => 'Другое',
    'account/profile/votes-per-day' => 'Голосов в день',
    'account/profile/votes-left' => 'Голосов осталось',
    'account/profile/timezone' => 'Часовой пояс',
    'account/profile/language' => 'Язык',
    'account/profile/saved' => 'Данные сохранены',

    'account/access/change-password' => 'Изменить пароль',
    'account/access/change-password/current' => 'Текущий',
    'account/access/change-password/new' => 'Новый',
    'account/access/change-password/new-confirm' => 'Новый (ещё раз)',
    'account/access/change-password/current-password-is-incorrect' => 'Текущий пароль введен неверно',
    'account/access/change-password/saved' => 'Пароль успешно изменён',
    'account/access/self-delete' => 'Удалить учётную запись',
    'account/access/self-delete/password-is-incorrect' => 'Пароль введён неверно',

    'account/specs/weight' => 'Вес',

    'account/specs/conflicts/filter/all' => 'Все',
    'account/specs/conflicts/filter/i-disagree' => 'Я не согласен',
    'account/specs/conflicts/filter/do-not-agree-with-me' => 'Не согласны со мной',
    'account/specs/conflicts/filter/errors' => 'Ошибки',

    'account/specs/conflicts/title/object' => 'Объект',
    'account/specs/conflicts/title/object/engine' => 'Двигатель',
    'account/specs/conflicts/title/parameter' => 'Характеристика',
    'account/specs/conflicts/title/my-value' => 'Моё значение',
    'account/specs/conflicts/title/other-values' => 'Другие значения',

    'account/specs/conflicts/my-value/none' => 'нет',

    'account/email/your-current-email:' => 'Ваш текущий адрес e-mail: ',
    'account/email/your-dont-enter-email' => 'Вы не указали адрес e-mail',
    'account/email/text' => 'На этой странице вы можете изменить свой адрес электронной почты (e-mail)

На новый адрес будет выслано письмо с инструкциями по его подтверждению',

    'account/accounts/add' => 'Добавить учётную запись',
    'account/accounts/remove' => 'Удалить',
    'account/accounts/removed' => 'Учётная запись удалена',
    'account/accounts/connect-failed' => 'Не удалось привязать учетную запись. Возможно произошла ошибка или доступ к приложению запрещен пользователем.',
    'account/accounts/disconnect-failed' => 'Не удалось удалить учетную запись.

Такое бывает, если привязанная учётная запись является единственным способом авторизации, т.е. не задан e-mail или другие учётный записи.',

    'account/delete/text' => 'Мы сожалем, что вам пришлось оказаться на этой странице, и вы планируете покинуть наш сайт навсегда, но не можем вам в этом отказать.

Нажав на красную кнопку, все данные, касающиеся вас, будут обезличены или удалены.

Этот процесс необратим, поэтому хорошенько подумайте и не принимайте поспешных решений.',
    'account/deleted/text' => 'Учётная запись удалена.
Желаем вам удачи.',

    'feedback/title' => 'Обратная связь',
    'feedback/name'  => 'Ваше имя',
    'feedback/message' => 'Сообщение',
    'feedback/donate-text' => 'Если вы пришли сюда, чтобы высказать слова поддержки, есть возможность [выразить её в твердой валюте](/donate)',
    'feedback/sent' => 'Ваше сообщение отправлено',

    'map/museums-and-factories' => 'музеи и заводы',

    'picture/image-specifications' => 'Характеристики изображения',
    'picture/added-by:' => 'Добавил:',
    'picture/location' => 'Координаты',
    'picture/status:' => 'Статус изображения:',
    'picture/status/inbox' => 'Решение не вынесено',
    'picture/status/accepted' => 'Принято',
    'picture/status/removing' => 'Поставлено в очередь на удаление',
    'picture/propose-image-replacement' => 'Предложить замену картинке',
    'picture/moderators-about-this-picture' => 'Модераторы об этом фото',
    'picture/all-images-have-owners' => 'Все изображения являются чьей-либо собственностью.',
    'picture/if-you-found-error' => 'Если вы считаете, что пользователи сайта ошиблись, разместив данную картинку в этом разделе, то было бы здорово, если бы вы написали об этом в комментариях и указали на ошибку.',
    'picture/where-to-talk' => 'Поделиться своей радостью, обсудить наболевшее и просто поболтать об автомобилях и не только вы можете на нашем <a href="/forums/" title="Перейти в форум">форуме</a>',
    'picture/other-languages' => 'На других языках',
    'picture/picture-suggested-to-replace' => 'Фото предложено на замену',
    'picture/that-engine-is-mounted-to-vehicle' => 'Такой двигатель устанавливается на автомобиль',
    'picture/that-engine-is-mounted-to-vehicles:' => 'Такой двигатель устанавливается на автомобили:',
    'picture/factory-details' => 'Подробнее о заводе ...',
    'picture/on-that-factory-produced-vehicle' => 'На этом заводе производился такой автомобиль, как',
    'picture/on-that-factory-produced-vehicles:' => 'На этом заводе производились такие автомобили, как: ',
    'picture/on-that-factory-produced-vehicles/and' => 'и',
    'picture/on-that-factory-produced-vehicles/and-other' => 'другие ...',

    'user/name' => 'Имя',
    'user/password' => 'Пароль',
    'user/password-confirm' => 'Пароль (еще раз)',

    'users/user/known-as:' => 'Представился как: ',
    'users/user/before-known-as:' => 'ранее известен как: ',
    'users/user/type:' => 'Тип учетной записи: ',
    'users/user/type/moderator' => 'Модератор',
    'users/user/type/visitor' => 'Посетитель',

    'users/user/upload-pictures:' => 'Добавил изображений: ',
    'users/user/pictures-left-on-site:' => 'из них на сайте осталось: ',

    'users/comments/order/new' => 'Новые',
    'users/comments/order/old' => 'Старые',
    'users/comments/order/positive' => 'Положительные',
    'users/comments/order/negative' => 'Отрицательные',

    'users/for-moderators' => 'Для модераторов',
    'users/for-moderators/remove-photo' => 'Удалить фотографию пользователя',
    'users/for-moderators/remove-user' => 'Удалить пользователя',
    'users/for-moderators/last-visit-from-ip' => 'Последний раз заходил с IP-адреса: ',

    'ban/that-address-is-banned' => 'Этот адрес забанил',
    'ban/until' => 'до',
    'ban/unban' => 'снять бан',
    'ban/ban' => 'Забанить',
    'ban/reason' => 'Причина',
    'ban/period' => 'На время',
    'ban/period/hour' => 'час',
    'ban/period/2-hours' => '2 часа',
    'ban/period/4-hours' => '4 часа',
    'ban/period/8-hours' => '8 часов',
    'ban/period/16-hours' => '16 часов',
    'ban/period/day' => 'сутки',
    'ban/period/2-days' => 'двое суток',

    'users/user/recent-activity' => 'Активность на сайте',
    'users/user/recent-uploads' => 'Последние добавленные изображения',
    'users/user/recent-comments' => 'Последние комментарии',
    'users/user/registration-date' => 'Зарегистрирован',
    'users/user/last-visited' => 'Последний раз был на сайте',
    'users/user/send-personal-message' => 'Отправить личное сообщение',
    'users/user/log' => 'Журнал событий пользователя',
    'users/user/uploaded-pictures' => 'Добавленные изображения',
    'users/user/not-upload-pictures' => 'Не добавлял изображений',

    'users/rating/specifications' => 'Технические х-ки',
    'users/rating/pictures' => 'Изображения',
    'users/rating/likes' => 'Лайки',
    'users/rating/picture-likes' => 'Лайки к фото',
    'users/rating/specs-volume' => 'Х-ки',
    'users/rating/weight' => 'Вес',

    'users/registration/email-confirm-subject' => 'Регистрация на %1$s',
    'users/registration/email-confirm-message' =>
        "Здравствуйте.\n" .
        "Вы зарегистрировались на сайте %1\$s\n" .
        "Ваши регистрационные данные:\n" .
        "E-mail: %2\$s\n" .
        "Для подтверждения регистрации и указанного вами адреса электронной почты, вам необходимо перейти по ссылке %3\$s\n\n" .
        "Если вы не регистрировались на сайте, то просто удалите это сообщение\n\n" .
        "С Уважением, Робот %4\$s",
    'users/registration/email-confirm/token-not-found' => 'Ссылка, по которой вы перешли на сайт - устарела',
    'users/registration/email-confirm/success-text' => 'Ваш адрес электронной почты успешно подтвержден.',
    'users/registration/success/email-sent' => 'На электронный адрес, указанный при регистрации, отправлено письмо с инструкциями для подтверждения адреса email.',
    'users/change-email/confirm-subject' => 'Подтверждение e-mail на %1$s',
    'users/change-email/confirm-message' =>
        "Здравствуйте.\n\n" .
        "Вы или кто-то другой запросили измнение контактного адреса своего аккаунта на сайте %1\$s на %2\$s\n" .
        "Для подтверждения указанного действия, вам необходимо перейти по ссылке %3\$s\n\n" .
        "Если сообщение попало к вам по ошибке - просто удалите его\n\n" .
        "С Уважением, Робот %1\$s\n",
    'users/change-email/confirmation-message-sent' => 'E-mail with a confirmation code was sent',

    'user/add-to-contacts' => 'Добавить в контакты',
    'user/remove-from-contacts' => 'Удалить из контактов',

    'donate/text' => 'Несмотря на то, что мы позиционируем нашу энциклопедию как некоммерческую, совсем обходиться без денег невозможно. Содержание сайта требует некоторых расходов.

Если у вас есть желание и возможность поддержать нас, вы можете сделать это, отправив нам немножко денег через PayPal или Yandex.Money.

Вместе с пожертвованием вы можете передать нам пару строк о том, куда вам хотелось бы видеть движение сайта и мы будем чувствовать себя немножечко более обязанными.

Мы не собираем информацию о жертвователях, но, если вы настаиваете, мы можем отметить ваш взнос.

In addition we can offer in return to [choose the next vehicle of the day](/donate/vod)',
    'donate/target' => 'На работу сайта',
    'donate/project' => 'AutoWP.ru',
    'donate/comment-hint' => 'Ваши пожелания',
    'donate/success-text' => 'Благодарим вас за оказанную поддержку.

Постараемся вас не разочаровать.',

    'donate/vod/text' => 'То немногое, что мы можем предложить взамен финансовой помощи в существовании сайта – это возможность выбрать ближайший "автомобиль дня".

Для этого следуйте инструкциям ниже.

Мы будем рады, если вы захотите [совершить бескорыстное пожертвование](/donate) на произвольную сумму.',
    'donate/vod/select-date' => '1. Выберите дату',
    'donate/vod/date-busy' => 'занято',
    'donate/vod/select-item' => '2. Выберите автомобиль',
    'donate/vod/select-item-text' => 'На роль автомобиля дня подойдет почти любой, из имеющихся, но есть некоторые ограничения:

- автомобиль должен быть выбран впервые
- автомобиль должен иметь по крайней мере 3 фотографии',
    'donate/vod/select-item/selection:' => 'Выбор: ',
    'donate/vod/select-item/select' => 'Выбрать ...',
    'donate/vod/preview' => '3. Предварительный просмотр',
    'donate/vod/anonymous' => 'Анонимно',
    'donate/vod/with-name' => 'С указанием имени (требуется регистрация)',
    'donate/vod/make-donation' => '4. Сделайте пожертвование',
    'donate/vod/order-message' => 'AutoWP.ru: автомобиль дня',
    'donate/vod/order-target' => 'Order %s',
    'donate/vod/message' => 'Ваши пожелания',
    'donate/vod/price:' => 'Сумма:',
    'donate/vod/price/currency' => 'руб.',
    'donate/vod/price-aroud' => 'примерно $%s',
    'donate/vod/method/credit-card' => 'Банковская карта',
    'donate/vod/method/mobile' => 'Счёт мобильного оператора',
    'donate/vod/method/yandex.money' => 'Яндекс.Деньги',
    'donate/vod/send' => 'Оплатить',

    'donate/vod/success-text' => 'В ближайшее время информация о пожертвовании автоматически поступит к нам и ваш выбор будет осуществлён.

Благодарим вас за оказанную поддержку.

Постараемся вас не разочаровать.',
    'donate/vod/wants-to-select?' => 'Желаете выбрать следующий?',

    'message/user-cancel-car-engine' => '%1$s отменил двигатель %2$s для автомобиля %3$s ( %4$s ]',

    'car-type/roadster'       => 'Родстер',
    'car-type/spyder'         => 'Спайдер',
    'car-type/cabriolet'      => 'Кабриолет',
    'car-type/cabrio-coupe'   => 'Кабрио-купе',
    'car-type/targa'          => 'Тарга',
    'car-type/coupe'          => 'Купе',
    'car-type/sedan'          => 'Седан',
    'car-type/hatchback'      => 'Хэтчбэк',
    'car-type/crossover'      => 'Кроссовер',
    'car-type/universal'      => 'Универсал',
    'car-type/limousine'      => 'Лимузин',
    'car-type/pickup'         => 'Пикап',
    'car-type/caravan'        => 'Легковой фургон',
    'car-type/offroad'        => 'Внедорожник',
    'car-type/minivan'        => 'Минивэн',
    'car-type/van'            => 'Фургон',
    'car-type/truck'          => 'Грузовик',
    'car-type/bus'            => 'Автобус',
    'car-type/phaeton'        => 'Фаэтон',
    'car-type/4door-hardtop'  => '4х дв. Хардтоп',
    'car-type/landau'         => 'Ландо',
    'car-type/offroad-cabrio' => 'Внедорожник-кабриолет',
    'car-type/liftback-coupe' => 'Лифтбэк-купе',
    'car-type/liftback-sedan' => 'Лифтбэк-седан',
    'car-type/2door-hardtop'  => '2х дв. Хардтоп',
    'car-type/minibus'        => 'Микроавтобус',
    'car-type/car'            => 'Легковой автомобиль',
    'car-type/multiplex-bus'  => 'Многосекционный автобус',
    'car-type/offroad-short'  => 'Внедорожник короткобазный',
    'car-type/brougham'       => 'Брогхэм',
    'car-type/fastback-sedan' => 'Фастбек-седан',
    'car-type/fastback-coupe' => 'Фастбек-купе',
    'car-type/tonneau'        => 'Тонно',
    'car-type/2-floor-bus'    => '2-х этажный автобус',
    'car-type/town-car'       => 'Таун кар',
    'car-type/barchetta'      => 'Баркетта',
    'car-type/moto'           => 'Мото',
    'car-type/tractor'        => 'Трактор',
    'car-type/tracked'        => 'Гусеничная платформа',

    'car-type-rp/roadster'       => 'Родстеров',
    'car-type-rp/spyder'         => 'Спайдеров',
    'car-type-rp/cabriolet'      => 'Кабриолетов',
    'car-type-rp/cabrio-coupe'   => 'Кабрио-купе',
    'car-type-rp/targa'          => 'Тарга',
    'car-type-rp/coupe'          => 'Купе',
    'car-type-rp/sedan'          => 'Седанов',
    'car-type-rp/hatchback'      => 'Хэтчбэков',
    'car-type-rp/crossover'      => 'Кроссоверов',
    'car-type-rp/universal'      => 'Универсалов',
    'car-type-rp/limousine'      => 'Лимузинов',
    'car-type-rp/pickup'         => 'Пикапов',
    'car-type-rp/caravan'        => 'Легковых фургонов',
    'car-type-rp/offroad'        => 'Внедорожников',
    'car-type-rp/minivan'        => 'Минивэнов',
    'car-type-rp/van'            => 'Фургонов',
    'car-type-rp/truck'          => 'Грузовиков',
    'car-type-rp/bus'            => 'Автобусов',
    'car-type-rp/phaeton'        => 'Фаэтонов',
    'car-type-rp/4door-hardtop'  => '4х дв. Хардтопов',
    'car-type-rp/landau'         => 'Ландо',
    'car-type-rp/offroad-cabrio' => 'Внедорожников-кабриолетов',
    'car-type-rp/liftback-coupe' => 'Лифтбэк-купе',
    'car-type-rp/liftback-sedan' => 'Лифтбэк-седанов',
    'car-type-rp/2door-hardtop'  => '2х дв. Хардтопов',
    'car-type-rp/minibus'        => 'Микроавтобусов',
    'car-type-rp/car'            => 'Легковых автомобилей',
    'car-type-rp/multiplex-bus'  => 'Многосекционных автобусов',
    'car-type-rp/offroad-short'  => 'Внедорожников короткобазных',
    'car-type-rp/brougham'       => 'Брогхэм',
    'car-type-rp/fastback-sedan' => 'Фастбек-седанов',
    'car-type-rp/fastback-coupe' => 'Фастбек-купе',
    'car-type-rp/tonneau'        => 'Тонно',
    'car-type-rp/2-floor-bus'    => '2-х этажных автобусов',
    'car-type-rp/town-car'       => 'Таун каров',
    'car-type-rp/barchetta'      => 'Баркетта',
    'car-type-rp/moto'           => 'Мото',
    'car-type-rp/tractor'        => 'Тракторов',
    'car-type-rp/tracked'        => 'Гусеничных платформ',

    'about/text' => '### Наши люди
Своим существованием наш проект обязан людям, приходящим сюда и вкладывающим своё время и знания.

Кто-то добавляет материалы, а кто-то помогает найти ошибки в уже имещихся. Кто-то специализируется на конкретной марке, а кто-то успевает за всем. Кто-то без лишнего внимания со стороны наполняет сайт шаг за шагом, а кто-то собирает овации редкими, но жгучими фото.

Нас много и мы разные, и это прекрасно. Вот лишь некоторые из нас:

%users%

#### "Цветовая дифференциация штанов"

Так завелось, что мы выделяем некоторых наших людей особым цветом - зеленым. Не просто так - это особая метка. Знайте, если вы видите кого-то из "зеленых", вы всегда можете схватить его и спросить о чем угодно вокруг нашего проекта, потому что "зеленые" - это самые отзывчивые и заинтересованные в жизни проекта люди.

Некоторая часть "зеленых" наделена модераторскими функциями.

### Диалог и обратная связь

Если у вас есть какие-то замечания, предложения или иные мысли, вы можете озвучить их на [форуме](/forums/), задать лично через систему обмена сообщениями или написать в "[обратную связь](/ng/feedback)" администрации сайта.

Если у вас есть вопросы о размещении рекламы, обмена ссылками или продвижении вашего продукта иными способами, все они имеют единственный ответ: мы не размещаем рекламу.

### Цифры

Так сложилось, что мы любим тешить своё тщеславие большими цифрами, а также всем их показывать. Вашему вниманию некоторые из них:

* на сайте более %total-pictures% изображений, %total-vehicles% автомобилей, что составляет порядка %total-size% данных
* зарегистрировано около %total-users% пользователей, оставивших более %total-comments% сообщений

### Разработка

Разработка и поддержка проекта ведется в основном силами %developer% ([contributors](https://github.com/autowp/autowp/graphs/contributors))

Перевод сайта на французский язык: %fr-translator%

Перевод сайта на китайский язык: %zh-translator%

Сайт работает на [Zend Framework](http://framework.zend.com/), [jQuery](http://jquery.com/), [Twitter bootstrap](http://getbootstrap.com/), а также многих других "умных словах".

Исходный кода сайта является открытым, чтобы каждый желающий имел возможность влиять на суть и качество проекта.

%github%

[![Build Status](https://travis-ci.org/autowp/autowp.svg?branch=master)](https://travis-ci.org/autowp/autowp)
[![Code Climate](https://codeclimate.com/github/autowp/autowp/badges/gpa.svg)](https://codeclimate.com/github/autowp/autowp)
[![Coverage Status](https://coveralls.io/repos/github/autowp/autowp/badge.svg?branch=master)](https://coveralls.io/github/autowp/autowp?branch=master)

### Поддержать проект

Вы можете поддержать наш проект [финансово](/donate) или [морально](/ng/feedback).
Принять участие в [переводе сайта](https://github.com/autowp/autowp/tree/master/module/Application/language) на другие языки.
',

    'page/1/name' => "Главная страница",
    'page/2/name' => "Главное меню",
    'page/10/name' => "Бренд",
    'page/14/name' => "%BRAND_NAME% в хронологическом порядке",
    'page/15/name' => "Последние картинки %BRAND_NAME%",
    'page/19/name' => "Производители",
    'page/20/name' => "Тип производителей",
    'page/21/name' => "Самые-самые",
    'page/22/name' => "Категории",
    'page/24/name' => "Лимитированные и специальные серии автомобилей",
    'page/25/name' => "Близнецы",
    'page/27/name' => "Технические характеристики %TWINS_GROUP_NAME%",
    'page/28/name' => "Все картинки %TWINS_GROUP_NAME%",
    'page/29/name' => "Добавить картинку",
    'page/30/name' => "Выбор бренда",
    'page/31/name' => "Статьи об автомобилях",
    'page/34/name' => "Все картинки %CAR_NAME%",
    'page/36/name' => "Технические характеристики %CAR_NAME%",
    'page/37/name' => "Концепты и прототипы %BRAND_NAME%",
    'page/39/name' => "Логотипы %BRAND_NAME%",
    'page/40/name' => "%BRAND_NAME% Разное",
    'page/41/name' => "Несортировано",
    'page/42/name' => "Форумы",
    'page/45/name' => "Добавить топик",
    'page/48/name' => "Личный кабинет",
    'page/49/name' => "Личные сообщения",
    'page/51/name' => "Новые изображения",
    'page/52/name' => "Регистрация",
    'page/53/name' => "ok",
    'page/54/name' => "Подтверждение email",
    'page/55/name' => "Мой e-mail",
    'page/56/name' => "Изменен",
    'page/57/name' => "Подписки в форуме",
    'page/60/name' => "Восстановление пароля",
    'page/61/name' => "Все производители",
    'page/63/name' => "Добавленные картинки",
    'page/66/name' => "Все картинки %BRAND_NAME% %DESIGN_PROJECT_NAME%",
    'page/67/name' => "Страница модератора",
    'page/68/name' => "Страницы сайта",
    'page/69/name' => "Добавить",
    'page/70/name' => "Изменить",
    'page/71/name' => "Права",
    'page/73/name' => "Картинки",
    'page/74/name' => "Автомобили по алфавиту",
    'page/75/name' => "Журнал событий",
    'page/76/name' => "Немодерированное",
    'page/77/name' => "Трафик",
    'page/79/name' => "Авторизация",
    'page/80/name' => "Отправленные",
    'page/81/name' => "Системные уведомления",
    'page/83/name' => "Перемещение",
    'page/86/name' => "Картинка успешно загружена на сайт",
    'page/87/name' => "Ещё",
    'page/89/name' => "Обратная связь",
    'page/90/name' => "Выход",
    'page/91/name' => "Регистрация",
    'page/93/name' => "Сообщение отправлено",
    'page/94/name' => "Немодерированные",
    'page/96/name' => "Автомобили-близнецы",
    'page/97/name' => "Ракурсы",
    'page/100/name' => "Аттрибуты",
    'page/102/name' => "Редактор характеристик %CAR_NAME%",
    'page/103/name' => "История изменения",
    'page/104/name' => "Пользовательская статистика",
    'page/105/name' => "Добавить комментарий",
    'page/106/name' => "Правила",
    'page/107/name' => "Заявки на удаление",
    'page/109/name' => "Cutaway",
    'page/110/name' => "Комментарии",
    'page/114/name' => "Журнал ТТХ",
    'page/117/name' => "Карта",
    'page/119/name' => "Статистика",
    'page/120/name' => "Блоки",
    'page/122/name' => "Технические характеристики",
    'page/123/name' => "Мои учётные записи",
    'page/124/name' => "Кто онлайн?",
    'page/125/name' => "Категории",
    'page/126/name' => "Добавить",
    'page/127/name' => "Редактировать",
    'page/128/name' => "Входящие",
    'page/129/name' => "Профиль",
    'page/130/name' => "Мои картинки",
    'page/131/name' => "Единицы данных",
    'page/133/name' => "Управление доступом",
    'page/134/name' => "Новый пароль",
    'page/135/name' => "Новый пароль сохранён",
    'page/136/name' => "О проекте",
    'page/137/name' => "Удаление учётной записи",
    'page/138/name' => "%CAR_TYPE_NAME% %BRAND_NAME% в хронологическом порядке",
    'page/141/name' => "Добавленные картинки %BRAND_NAME%",
    'page/144/name' => "Выбор parent",
    'page/148/name' => "Обрезание",
    'page/149/name' => "Перемещение изображения",
    'page/153/name' => "Близнецы %BRAND_NAME%",
    'page/154/name' => "Самые %MOST_NAME%",
    'page/155/name' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME%",
    'page/156/name' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %YEAR_NAME%",
    'page/161/name' => "Пульс",
    'page/162/name' => "Все изображения",
    'page/164/name' => "Самые-самые",
    'page/165/name' => "Самые %MOST_NAME% %BRAND_NAME%",
    'page/166/name' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %BRAND_NAME%",
    'page/167/name' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %BRAND_NAME% %YEAR_NAME%",
    'page/173/name' => "Статистика",
    'page/174/name' => "Specs",
    'page/175/name' => "Заводы",
    'page/176/name' => "Добавить",
    'page/180/name' => "Заводы",
    'page/182/name' => "Продукция",
    'page/186/name' => "Все изображения",
    'page/188/name' => "Конфликты",
    'page/189/name' => "Слишком много конфликтов",
    'page/196/name' => "Пожертвование",
    'page/197/name' => "История изменения текста",
    'page/198/name' => "Контакты",

    'page/1/title' => "Энциклопедия автомобилей в картинках. AutoWP.ru",
    'page/14/title' => "%BRAND_NAME% в хронологическом порядке",
    'page/15/title' => "Последние картинки %BRAND_NAME%",
    'page/19/title' => "Производители",
    'page/21/title' => "Самые-самые",
    'page/22/title' => "Категории",
    'page/25/title' => "Автомобили-близнецы",
    'page/27/title' => "Технические характеристики %TWINS_GROUP_NAME%",
    'page/28/title' => "Все картинки %TWINS_GROUP_NAME%",
    'page/29/title' => "Добавить картинку",
    'page/30/title' => "Выбор бренда",
    'page/31/title' => "Статьи об автомобилях",
    'page/34/title' => "Все картинки %CAR_NAME%",
    'page/36/title' => "Технические характеристики %CAR_NAME%",
    'page/37/title' => "Концепты и прототипы %BRAND_NAME%",
    'page/39/title' => "Логотипы %BRAND_NAME%",
    'page/40/title' => "%BRAND_NAME% Разное",
    'page/41/title' => "Несортировано",
    'page/42/title' => "Форумы",
    'page/45/title' => "Добавить топик",
    'page/48/title' => "Личный кабинет",
    'page/49/title' => "Личные сообщения",
    'page/51/title' => "",
    'page/52/title' => "Регистрация",
    'page/53/title' => "Успешная регистрация",
    'page/54/title' => "Подтверждение адреса электронной почты",
    'page/55/title' => "Мой e-mail",
    'page/56/title' => "Изменение адреса e-mail",
    'page/57/title' => "Подписки в форуме",
    'page/60/title' => "Восстановление пароля",
    'page/63/title' => "Добавленные картинки",
    'page/66/title' => "Все картинки %BRAND_NAME% %DESIGN_PROJECT_NAME%",
    'page/76/title' => "Немодерированное",
    'page/79/title' => "Авторизация",
    'page/80/title' => "Отправленные",
    'page/81/title' => "Системные уведомления",
    'page/83/title' => "Перемещение",
    'page/86/title' => "Картинка успешно загружена на сайт",
    'page/87/title' => "Ещё",
    'page/94/title' => "Немодерированные",
    'page/102/title' => "Редактор характеристик %CAR_NAME%",
    'page/103/title' => "История изменения",
    'page/105/title' => "Добавить комментарий",
    'page/106/title' => "Правила",
    'page/107/title' => "Заявки на удаление",
    'page/110/title' => "Комментарии",
    'page/114/title' => "Журнал ТТХ",
    'page/117/title' => "Карта",
    'page/122/title' => "Технические характеристики",
    'page/123/title' => "Мои учётные записи",
    'page/125/title' => "Категории",
    'page/126/title' => "Добавить",
    'page/127/title' => "Редактировать",
    'page/128/title' => "Входящие",
    'page/129/title' => "Профиль",
    'page/130/title' => "Мои картинки",
    'page/133/title' => "Access Control",
    'page/134/title' => "Новый пароль",
    'page/135/title' => "",
    'page/136/title' => "О проекте",
    'page/137/title' => "",
    'page/138/title' => "%CAR_TYPE_NAME% %BRAND_NAME% в хронологическом порядке",
    'page/141/title' => "Добавленные картинки %BRAND_NAME%",
    'page/144/title' => "Выбор parent",
    'page/148/title' => "Обрезание",
    'page/149/title' => "Перемещение изображения",
    'page/153/title' => "Близнецы %BRAND_NAME%",
    'page/154/title' => "Самые %MOST_NAME%",
    'page/155/title' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME%",
    'page/156/title' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %YEAR_NAME%",
    'page/161/title' => "Пульс",
    'page/162/title' => "Все изображения",
    'page/164/title' => "Самые-самые",
    'page/165/title' => "Самые %MOST_NAME% %BRAND_NAME%",
    'page/166/title' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %BRAND_NAME%",
    'page/167/title' => "Самые %MOST_NAME% среди %CAR_TYPE_NAME% %BRAND_NAME% %YEAR_NAME%",
    'page/173/title' => "Статистика",
    'page/174/title' => "Specs",
    'page/175/title' => "Заводы",
    'page/176/title' => "Добавить",
    'page/180/title' => "Заводы",
    'page/182/title' => "Продукция",
    'page/186/title' => "Все изображения",
    'page/188/title' => "Конфликты",
    'page/189/title' => "Слишком много конфликтов",
    'page/196/title' => "Пожертвование",
    'page/197/title' => "История изменения текста",
    'page/198/title' => "Контакты",

    'page/14/breadcrumbs' => "В хронологическом порядке",
    'page/15/breadcrumbs' => "Последние картинки",
    'page/19/breadcrumbs' => "Производители",
    'page/27/breadcrumbs' => "Технические характеристики",
    'page/28/breadcrumbs' => "Все картинки",
    'page/30/breadcrumbs' => "Выбор бренда",
    'page/31/breadcrumbs' => "Статьи об автомобилях",
    'page/34/breadcrumbs' => "Все картинки",
    'page/36/breadcrumbs' => "Specifications",
    'page/37/breadcrumbs' => "Концепты и прототипы",
    'page/39/breadcrumbs' => "Логотипы",
    'page/40/breadcrumbs' => "Разное",
    'page/41/breadcrumbs' => "Несортировано",
    'page/45/breadcrumbs' => "Добавить топик",
    'page/63/breadcrumbs' => "Добавленные картинки",
    'page/66/breadcrumbs' => "Все картинки",
    'page/76/breadcrumbs' => "Немодерированное",
    'page/83/breadcrumbs' => "Перемещение",
    'page/86/breadcrumbs' => "Успех",
    'page/102/breadcrumbs' => "Редактор характеристик автомобиля",
    'page/109/breadcrumbs' => "Cutaway",
    'page/122/breadcrumbs' => "Технические характеристики",
    'page/123/breadcrumbs' => "My accounts",
    'page/136/breadcrumbs' => "О проекте",
    'page/141/breadcrumbs' => "Добавленные картинки %BRAND_NAME%",
    'page/144/breadcrumbs' => "Выбор бренда",
    'page/146/breadcrumbs' => "Выбор группы близнецов",
    'page/147/breadcrumbs' => "Выбор проекта дизайна",
    'page/148/breadcrumbs' => "Обрезание",
    'page/149/breadcrumbs' => "Перемещение изображения",
    'page/161/breadcrumbs' => "Пульс",
    'page/162/breadcrumbs' => "Все изображения",
    'page/164/breadcrumbs' => "Самые-самые",
    'page/173/breadcrumbs' => "Статистика",
    'page/174/breadcrumbs' => "Specs",
    'page/175/breadcrumbs' => "Заводы",
    'page/176/breadcrumbs' => "Добавить",
    'page/178/breadcrumbs' => "Выбор завода",
    'page/180/breadcrumbs' => "Заводы",
    'page/182/breadcrumbs' => "Продукция",
    'page/186/breadcrumbs' => "Все изображения",
    'page/188/breadcrumbs' => "Конфликты",
    'page/189/breadcrumbs' => "Слишком много конфликтов",
    'page/196/breadcrumbs' => "Пожертвование",
    'page/197/breadcrumbs' => "История изменения текста",
    'page/198/breadcrumbs' => "Контакты",

    'page/201/name'        => "Маскоты",
    'page/201/title'       => "Маскоты",
    'page/201/breadcrumbs' => "Маскоты",

    'page/202/name'        => 'Справка по ракурсам',
    'page/202/title'       => 'Справка по ракурсам',
    'page/202/breadcrumbs' => 'Справка по ракурсам',

    'page/203/name'        => 'Пользователи',
    'page/203/title'       => 'Пользователи',
    'page/203/breadcrumbs' => 'Пользователи',

    'page/204/name'        => 'Telegram',
    'page/204/title'       => 'Telegram',
    'page/204/breadcrumbs' => 'Telegram',

    'page/205/name'        => 'Комментарии',
    'page/205/title'       => 'Комментарии',
    'page/205/breadcrumbs' => 'Комментарии',

    'page/208/name'        => 'Двигатели %BRAND_NAME%',
    'page/208/title'       => 'Двигатели %BRAND_NAME%',
    'page/208/breadcrumbs' => 'Двигатели %BRAND_NAME%',

    'page/211/name'        => 'Контакты',
    'page/211/title'       => 'Контакты',
    'page/211/breadcrumbs' => 'Контакты',

    'page/212/name'        => 'Шаблоны модераторских голосов',
    'page/212/title'       => 'Шаблоны модераторских голосов',
    'page/212/breadcrumbs' => 'Шаблоны модераторских голосов',

    'moder-menu/title' => 'Меню модератора',
    'moder-menu/inbox' => 'Инбокс',

    'moder/database-id-%s' => 'В базе данных чиcлится под номером %s',
    'ng/moder/database-id-n' => 'В базе данных чиcлится под номером {id}',

    'moder/picture/missing-perspective' => 'Пропущен ракурс',
    'moder/picture/delete-queue' => 'Очередь удаления',
    'moder/picture/votes' => 'Голоса',
    'moder/picture/comments' => 'Зафлудили',
    'moder/picture/new-votes' => 'Новые заявки',
    'moder/picture/replaces' => 'Новые замены',
    'moder/picture/edit/special-name' => 'Особое название',

    'moder/pictures/acceptance/message' => 'Сообщение',

    'moder/vehicle/name' => 'Название',
    'moder/vehicle/body' => 'Номер кузова',
    'moder/vehicle/spec' => 'Рынок',
    'moder/vehicle/type' => 'Тип кузова',
    'moder/vehicle/model-years' => 'Модельные года',
    'moder/vehicle/begin' => 'Начало',
    'moder/vehicle/end' => 'Окончание',
    'moder/item/produced' => 'Произведено',
    'moder/item/produced/number' => 'единиц',
    'moder/item/produced/precision' => 'точно?',
    'moder/item/produced/about' => 'примерно',
    'moder/item/produced/exactly' => 'точно',
    'moder/vehicle/concept' => 'Концепт (прототип)',
    'moder/vehicle/group' => 'Группа',
    'moder/vehicle/year' => 'год',
    'moder/vehicle/year/from' => 'с',
    'moder/vehicle/year/to' => 'по',
    'moder/vehicle/month' => 'месяц',
    'moder/vehicle/today' => 'наше время',
    'moder/vehicle/today/ended' => 'выпуск закончен',
    'moder/vehicle/today/continue' => 'производится в н.в.',
    'moder/vehicle/is-concept/no' => 'нет',
    'moder/vehicle/is-concept/yes' => 'да',
    'moder/vehicle/is-concept/inherited-no' => 'унаследовано (нет)',
    'moder/vehicle/is-concept/inherited-yes' => 'унаследовано (да)',
    'moder/vehicle/is-concept/inherited' => 'унаследовано',

    'moder/item/short-description' => 'Краткое описание',
    'moder/item/full-description' => 'Полное описание',

    'moder/vehicle/meta/description' => 'Краткое описание',

    'moder/vehicle/move/here' => 'сюда',

    'moder/vehicle/add/as-submodel' => 'В автомобиль',

    'attrs/attribute/name' => 'Название',
    'attrs/attribute/type' => 'Тип',
    'attrs/attribute/unit' => 'Единица измерения',
    'attrs/attribute/precision' => 'Точность (для float аттрибута)',
    'attrs/attribute/description' => 'Описание',

    'attrs/list-options/parent' => 'Родитель',
    'attrs/list-options/name' => 'Название',

    'moder/attrs/zones' => 'Зоны',
    'moder/attrs/parameters' => 'Парметры аттрибута',
    'moder/attrs/parameters/options-list' => 'Список значений (для списковых типов)',
    'moder/attrs/parameters/options-list/add' => 'Добавить значение',
    'moder/attrs/attributes' => 'Аттрибуты',
    'moder/attrs/attribute/add-subattribute' => 'Добавить податтрибут',
    'moder/attrs/attributes-order' => 'Порядок аттрибутов',

    'category/name' => 'Название',
    'category/parent' => 'Родитель',
    'categories/other' => 'Другие',

    'moder/categories/add' => 'Добавить',
    'moder/categories/edit' => 'Изменить',
    'moder/categories/new' => 'Новый',

    'moder/picture/edit-picture-%s' => 'Управление изображением №%s',
    'moder/picture/edit-item-%s' => 'Управление %s',
    'moder/picture/edit-brand-%s' => 'Управление брендом %s',
    'moder/picture/edit-engine-%s' => 'Управление двигателем %s',
    'moder/picture/edit-factory-%s' => 'Управление заводом %s',

    'moder/picture/picture-n-%s' => 'Изображение №%s',
    'moder/picture/previous' => '<< предыдущее',
    'moder/picture/next' => 'следующее >>',
    'moder/picture/previous-new' => '<< предыдущее не обработанное',
    'moder/picture/next-new' => 'следующее не обработанное >>',

    'moder/picture/perspective' => 'Ракурс',
    'moder/picture/perspective-by' => 'Установил: ',

    'moder/picture/acceptance' => 'Статус/Удаление/Принятие',
    'moder/picture/acceptance/accepted' => 'Принято',
    'moder/picture/acceptance/not-accepted' => 'Не принято',
    'moder/picture/acceptance/in-delete-queue' => 'Поставлено в очередь на удаление',
    'moder/picture/acceptance/accept' => 'Принять',
    'moder/picture/acceptance/delete' => 'Удалить',
    'moder/picture/acceptance/unaccept' => 'Сделать не принятой',
    'moder/picture/acceptance/restore' => 'Восстановить',
    'moder/picture/acceptance/removed' => 'Удалено',
    'moder/picture/acceptance/removing' => 'Удаляется',
    'moder/picture/acceptance/inbox' => 'Входящее',
    'moder/picture/acceptance/reason' => 'Причина',
    'moder/picture/acceptance/custom' => 'Своя ...',
    'moder/picture/acceptance/add-reason' => 'Добавить шаблон',
    'moder/picture/acceptance/vote' => 'Голос',

    'moder/picture/acceptance/want-accept' => 'Хочу принять',
    'moder/picture/acceptance/want-delete' => 'Хочу удалить',
    'moder/picture/acceptance/cancel-vote' => 'Отменить мою заявку',
    'moder/picture/acceptance/already-voted' => 'Уже подали: ',
    'moder/picture/acceptance/that-is-one-accepted-picture' => 'Это единственная принятая картинка этого автомобиля',
    'ng/moder/picture/acceptance/accepted-pictures-is-n' => 'Принятых картинок этого автомобиля всего {count}',
    'moder/picture/acceptance/accepted-pictures-is-%s' => 'Принятых картинок этого автомобиля всего %s',

    'moder/picture/public-url:' => 'На сайте: ',
    'moder/picture/image:' => 'Картинка: ',
    'moder/picture/image-specs:' => 'Характеристики изображения: ',
    'moder/picture/resolution:' => 'Разрешение: ',
    'moder/picture/filesize:' => 'Размер файла: ',
    'moder/picture/upload-date:' => 'Добавлено: ',
    'moder/picture/settings' => 'Настройки',
    'moder/picture/copyrights' => 'Копирайты',

    'moder/pciture/move/brands' => 'Бренды',
    'moder/pciture/move/factories' => 'Заводы',
    'moder/pciture/move/engines' => 'Двигатели',

    'brand' => 'Бренд',
    'brand/name' => 'Название',
    'brand/logo' => 'Логотип',

    'moder/brands/meta-data/full-name' => 'Полное название',
    'moder/brands/logo/description' => '* Логотип должен быть строго в формате PNG.
* Все прозрачные области должны быть прозрачными, а не белыми!
* Логотип должен касаться краев изображения. Никаких полей не не надо
* Закачивайте в максимальном доступном разрешении - это обеспечит качество и возможность в будущем где-то воспользоваться этим крупным фото. На сайте все размеры будут подогнанны',
    'moder/brands/logo/saved' => 'Логотип сохранен',

    'moder/edit-object' => 'управление',

    'moder/markdown/description' => 'Синтаксис Markdown.

Несколько описаний языка:
[1](https://ru.wikipedia.org/wiki/Markdown),
[2](https://en.wikipedia.org/wiki/Markdown),
[3](https://guides.github.com/features/mastering-markdown/),
[4](https://daringfireball.net/projects/markdown/basics),
[5](http://rukeba.com/by-the-way/markdown-sintaksis-po-russki)

Ссылки на внутрисайтовые страницы следует писать не полностью: ~~http://autowp.ru/bmw/~~ */bmw/*',
    'moder/markdown/edit' => 'Редактировать',
    'moder/markdown/preview' => 'Предварительный просмотр',
    'moder/markdown/history' => 'История',

    'moder/users/login' => 'Логин',
    'moder/users/name' => 'Имя',
    'moder/users/role' => 'Роль',
    'moder/users/profile' => 'Профиль',
    'moder/users/last-visit' => 'Последний заход',
    'moder/users/registration' => 'Регистрация',

    'latitude' => 'Широта',
    'longtitude' => 'Долгота',

    'museum/name' => 'Название',
    'museum/address' => 'Адрес',
    'museum/photo' => 'Фотография',
    'museum/description' => 'Описание',

    'moder/museums/add' => 'Добавить музей',

    'factory/name' => 'Название',
    'factory/year_from' => 'Год с',
    'factory/year_to' => 'Год по',

    'moder/comments/title' => 'Комментарии',
    'moder/comments/filter' => 'Фильтр',
    'moder/comments/filter/user-id' => 'Пользователь №',
    'moder/comments/filter/brand-id' => 'Бренд №',
    'moder/comments/filter/moderator_attention' => 'Внимание модераторов',
    'moder/comments/filter/moderator_attention/not-matters' => 'Не важно',
    'moder/comments/filter/moderator_attention/not-required' => 'Не требуется',
    'moder/comments/filter/moderator_attention/required' => 'Требуется',
    'moder/comments/filter/moderator_attention/resolved' => 'Выполнено',
    'moder/comments/filter/vehicle-id' => 'Единица данных',
    'moder/comments/not-readed' => 'не прочитано',

    'engine/name' => 'Название',

    'moder/engines/engine/vehicles' => 'Автомобили на этом двигателе',

    'page/name' => 'Название',
    'page/is_group_node' => 'Группообразующий узел?',
    'page/registered_only' => 'Только для зарегистрированных?',
    'page/guests_only' => 'Только для гостей?',
    'page/class' => 'Класс',
    'page/parent' => 'Родитель',

    'moder/pages/new' => 'Новый',

    'moder/index/other-tools' => 'Другие инструменты',

    'moder/acl/add-role' => 'Добавить роль',
    'moder/acl/add-rule' => 'Добавить правило',
    'moder/acl/add-rule/action' => 'Действие',
    'moder/acl/add-rule/action/allow' => 'разрешить',
    'moder/acl/add-rule/action/deny' => 'запретить',
    'moder/acl/add-parent' => 'Добавить родителя',
    'moder/acl/role' => 'Роль',
    'moder/acl/parent-role' => 'Родительская роль',
    'moder/acl/privilege' => 'Привелегия',

    'votings/do-vote' => 'Голосовать',
    'votings/who-voted' => 'Кто проголосовал?',
    'votings/voting/voters/during-%s-%s' => 'Опрос проводится с %s по %s',
    'votings/voting/voters/show-all' => 'показать всех',
    'votings/voting/voters/show-contributors' => 'показать только от 100 закаченных картинок',

    'museums/museum/address:' => 'Адрес:',
    'museums/museum/on-the-map' => 'на карте',
    'museums/museum/website:' => 'Web-сайт: ',

    'restore-password/text' => 'Если вы забыли свой пароль - введите ваш e-mail (который вы указали при регистрации) и на него будет выслан пароль.',
    'restore-password/new-password/text' => 'Введите новый пароль',
    'restore-password/new-password/saved' => 'Новый пароль успешно сохранён.

Не забывайте его',
    'restore-password/new-password/instructions-sent' => 'На ваш e-mail отправлены дальнейшие инструкции',
    'restore-password/new-password/email-not-found' => 'Пользователь с таким e-mail не найден',
    'restore-password/new-password/mail/subject' => 'Восстановление пароля',
    'restore-password/new-password/mail/body-%s' =>
        "Для ввода нового пароля перейдите по ссылке: %s\n\n" .
        "С Уважением, робот www.autowp.ru\n",

    'twins/group/name' => 'Название',
    'twins/group/description' => 'Описание',

    'specifications-editor/description' => 'Просьба отнестить со всей ответственностью ко всем выполняемым действиям, т.к. они станут достоянием общественности.


О структуре самих характеристик.

Все характеристики организованы в виде дерева элементов "параметр - значение". Значения могут быть числовыми и текстовыми.

Важной особенностью является тот факт, что каждая характеристика может быть задана одновременно несколькими пользователями. В этом случае актуальным (используемым) значением является то, которое система сочтет приоритетным по ряду признаков.

Если вы столкнулись с ситуацией, когда вам не удаётся перекрыть введенное кем-то ранее значение, то вы можете просто написать об этом автору. Впрочем в процессе реализации система автоматического уведомления автором о том, что с его значением кто-то не согласен.


Все значения, которые здесь вводятся - отображаются на сайте, в характеристиках, используются в построении разделы "самые-самые", а также отображаются в некоторых других местах сайта.',
    'specifications-editor/not-save' => 'Данные не сохранены из-за ошибки. Подробности ниже',
    'specifications-editor/parameter' => 'Характеристика',
    'specifications-editor/your-value' => 'Ваше значение',
    'specifications-editor/actual-value' => 'Актуальное значение',
    'specifications-editor/all-values' => 'Введеные значения',
    'specifications-editor/tabs/info' => 'Информация',
    'specifications-editor/tabs/engine' => 'Двигатель',
    'specifications-editor/tabs/specs' => 'Основные ТТХ',
    'specifications-editor/tabs/result' => 'Результат',
    'specifications-editor/tabs/admin' => 'Admin',
    'specifications-editor/engine' => 'Двигатель из каталога',
    'specifications-editor/engine/inherited-from' => 'Унаследовано от',
    'specifications-editor/engine/select-another' => 'Выбрать другой двигатель',
    'specifications-editor/engine/cancel' => 'Отменить двигатель',
    'specifications-editor/engine/inherit' => 'Наследовать двигатель',
    'specifications-editor/engine/not-selected' => '[не выбран]',
    'specifications-editor/engine/select' => 'Выбрать двигатель',
    'specifications-editor/engine/dont-inherit' => 'Не наследовать двигатель',
    'specifications-editor/save' => 'Сохранить',

    'specifications-editor/log' => 'Журнал ТТХ',
    'specifications-editor/log/date' => 'Дата',
    'specifications-editor/log/user' => 'Пользователь',
    'specifications-editor/log/object' => 'Объект',
    'specifications-editor/log/attribute' => 'Атрибут',
    'specifications-editor/log/value' => 'Значение',
    'specifications-editor/log/editor' => 'Редактор',
    'specifications-editor/log/to-editor' => 'в редактор',
    'specifications-editor/log/filter/user-id' => 'Пользователь',
    'specifications-editor/log/low-weight-text' => 'Зарегистрировано большое количество конфликтов в данных, введеных вами. Другие люди часто опревергают информацию, предоставленную вами.

Ввод данных временно приостановлен. Просьба исправить ситуацию, провести ревизию конфликтов.

Осуществить это поможет [специальный интерфейс](/account/specs-conflicts/conflict/minus-weight), в котором собраны по крайней мере те ошибки, которые обнаружили посетители сайта.',
    'specifications-editor/errors-alert' => '**Внимание!** Вроятно, у вас накопилось существенное количество ошибок.

Некоторые из них, обнаруженные другими посетителями, вы можете найти [здесь](/account/specs-conflicts)',

    'specifications-editor/admin/date' => 'Дата',
    'specifications-editor/admin/user' => 'Пользователь',
    'specifications-editor/admin/parameter' => 'Характеристика',
    'specifications-editor/admin/value' => 'Значение',
    'specifications-editor/admin/move' => 'Перенести',

    'pm/user-%s-edited-brand-description-%s-%s' => 'Пользователь %s редактировал описание бренда %s ( %s )',
    'pm/user-%s-edited-item-language-%s-%s' => "Пользователь %s редактировал языковую информацию %s ( %s )\n%s",
    'pm/user-%s-edited-vehicle-meta-data-%s-%s-%s' => "Пользователь %s редактировал информацию о %s ( %s )\n%s",
    'pm/user-%s-adds-item-%s-%s-to-item-%s-%s' => 'Пользователь %s добавил %s ( %s ) в %s ( %s )',
    'pm/user-%s-removed-item-%s-%s-from-item-%s-%s' => 'Пользователь %s удалил %s ( %s ) из %s ( %s )',
    'pm/user-%s-cancel-link-vehicle-%s-%s-with-categories-%s' => 'Пользователь %s отменил вашу привязку автомобиля %s ( %s ) к категориям: %s',
    'pm/user-%s-edited-factory-description-%s-%s' => 'Пользователь %s редактировал описание завода %s ( %s )',
    'pm/your-picture-%s-enqueued-to-remove-%s' => "Добавленная вами картинка %s поставлена в очередь на удаление\n%s",
    'pm/new-picture-%s-vote-%s/accept' => "Подана заявка на принятие добавленной вами картинки\n%s\nПричина: %s",
    'pm/new-picture-%s-vote-%s/delete' => "Подана заявка на удаление добавленной вами картинки\n%s\nПричина: %s",
    'pm/user-%s-edited-picture-copyrights-%s-%s' => 'Пользователь %s редактировал текст копирайтов изображения %s ( %s )',
    'pm/user-%s-accept-replace-%s-%s' => '%s принял замену %s на %s',
    'pm/your-picture-accepted-%s' => "Добавленная вами картинка принята на сайт\n%s",
    'pm/user-%s-edited-twins-description-%s-%s' => 'Пользователь %s редактировал описание группы близнецов %s ( %s )',
    'pm/user-%s-edited-vehicle-specs-%s' => '%s внес ттх для автомобиля %s',
    'pm/user-%s-canceled-vehicle-engine-%s-%s-%s' => '%s отменил двигатель %s для автомобиля %s ( %s )',
    'pm/user-%s-set-inherited-vehicle-engine-%s-%s' => '%s установил наследование двигателя автомобилю %s ( %s )',
    'pm/user-%s-set-vehicle-engine-%s-%s-%s' => '%s назначил двигатель %s автомобилю %s ( %s )',
    'pm/user-%s-replies-to-you-%s' => "%s ответил на ваше сообщение\n%s",
    'pm/user-%s-post-new-message-%s' => "%s написал сообщение\n%s",

    'moder/vehicle/changes/name-%s-%s' => 'название с "%s" на "%s"',
    'moder/vehicle/changes/body-%s-%s' => 'номер кузова с "%s" на "%s"',
    'moder/vehicle/changes/from/year-%s-%s' => 'год начала выпуска c "%s" на "%s"',
    'moder/vehicle/changes/from/month-%s-%s' => 'месяц начала выпуска с "%s" на "%s"',
    'moder/vehicle/changes/to/year-%s-%s' => 'год окончания выпуска с "%s" на "%s"',
    'moder/vehicle/changes/to/month-%s-%s' => 'месяц окончания выпуска с "%s" на "%s"',
    'moder/vehicle/changes/to/today-%s-%s' => 'выпуск в наше время с "%s" на "%s"',
    'moder/vehicle/changes/produced/count-%s-%s' => 'количество выпущенных единиц с "%s" на "%s"',
    'moder/vehicle/changes/produced/exactly-%s-%s' => 'точность количества выпущенных единиц с "%s" на "%s"',
    'moder/vehicle/changes/is-group-%s-%s' => 'флаг "группа" с "%s" на "%s"',
    'moder/vehicle/changes/car-type-%s-%s' => 'тип кузова с "%s" на "%s"',
    'moder/vehicle/changes/model-years/from-%s-%s' => 'модельный год начала выпуска c "%s" на "%s"',
    'moder/vehicle/changes/model-years/to-%s-%s' => 'модельный год окончания выпуска c "%s" на "%s"',
    'moder/vehicle/changes/spec-%s-%s' => 'spec с "%s" на "%s"',

    'moder/vehicle/changes/boolean/true' => 'да',
    'moder/vehicle/changes/boolean/false' => 'нет',

    'specifications/no-value-text' => 'нет значения',
    'specifications/boolean/false' => 'нет',
    'specifications/boolean/true' => 'да',

    "Brand '%value%' already exists" => "Бренд с названием '%value%' уже существует",
    "E-mail '%value%' not registered" => "E-mail '%value%' не зарегистрирован на сайте",
    "E-mail '%value%' already registered" => "E-mail '%value%' уже зарегистрирован на сайте",

    'specs/attrs/45' => 'название модификации',
    'specs/attrs/95' => 'года выпуска',
    'specs/attrs/95/96' => 'с',
    'specs/attrs/95/97' => 'по',
    'specs/attrs/95/106' => 'продажи',
    'specs/attrs/95/106/109' => 'с',
    'specs/attrs/95/106/109/129' => 'год',
    'specs/attrs/95/106/109/130' => 'месяц',
    'specs/attrs/95/106/109/131' => 'число',
    'specs/attrs/95/106/111' => 'по',
    'specs/attrs/95/106/111/132' => 'год',
    'specs/attrs/95/106/111/133' => 'месяц',
    'specs/attrs/95/106/111/134' => 'число',
    'specs/attrs/95/104' => 'модельные',
    'specs/attrs/95/104/113' => 'с',
    'specs/attrs/95/104/114' => 'по',
    'specs/attrs/95/107' => 'дебют на автосалоне',
    'specs/attrs/95/107/118' => 'год',
    'specs/attrs/95/107/119' => 'месяц',
    'specs/attrs/95/107/120' => 'число',
    'specs/attrs/95/108' => 'производство',
    'specs/attrs/95/108/121' => 'с',
    'specs/attrs/95/108/121/123' => 'год',
    'specs/attrs/95/108/121/124' => 'месяц',
    'specs/attrs/95/108/121/125' => 'число',
    'specs/attrs/95/108/122' => 'по',
    'specs/attrs/95/108/122/126' => 'год',
    'specs/attrs/95/108/122/127' => 'месяц',
    'specs/attrs/95/108/122/128' => 'число',
    'specs/attrs/95/135' => 'участие в соревнованиях',
    'specs/attrs/95/135/136' => 'с',
    'specs/attrs/95/135/137' => 'по',
    'specs/attrs/16' => 'основные',
    'specs/attrs/16/12' => 'количество мест',
    'specs/attrs/16/12/67' => 'всего',
    'specs/attrs/16/12/67/description' => 'сидячих',
    'specs/attrs/16/12/68' => 'из них неполноценных',
    'specs/attrs/16/12/69' => 'стоячих',
    'specs/attrs/16/12/103' => 'общая вместимость',
    'specs/attrs/16/12/103/description' => 'с учётом стоячих мест',
    'specs/attrs/16/13' => 'количество дверей',
    'specs/attrs/16/66' => 'расположение руля',
    'specs/attrs/16/66/options/11' => 'слева',
    'specs/attrs/16/66/options/12' => 'справа',
    'specs/attrs/16/66/options/13' => 'по центру',
    'specs/attrs/16/204' => 'конструкция',
    'specs/attrs/16/204/options/85' => 'несущий кузов',
    'specs/attrs/16/204/options/86' => 'рамная',
    'specs/attrs/14' => 'геометрия',
    'specs/attrs/14/4' => 'колёсная база',
    'specs/attrs/14/17' => 'габариты',
    'specs/attrs/14/17/description' => 'Внешние размеры',
    'specs/attrs/14/17/1' => 'длина',
    'specs/attrs/14/17/2' => 'ширина',
    'specs/attrs/14/17/3' => 'высота',
    'specs/attrs/14/17/140' => 'ширина, с учётом зеркал',
    'specs/attrs/14/17/141' => 'высота, с учётом рейлингов',
    'specs/attrs/14/17/203' => 'высота с открытой крышей',
    'specs/attrs/14/18' => 'колея',
    'specs/attrs/14/18/5' => 'передняя',
    'specs/attrs/14/18/6' => 'задняя',
    'specs/attrs/14/63' => 'аэродинамическое сопротивление',
    'specs/attrs/14/63/64' => 'лобовое',
    'specs/attrs/14/63/65' => 'боковое',
    'specs/attrs/14/167' => 'дорожный просвет',
    'specs/attrs/14/167/description' => 'клиренс',
    'specs/attrs/14/167/176' => 'мин',
    'specs/attrs/14/167/7' => 'стандарт',
    'specs/attrs/14/167/168' => 'макс',
    'specs/attrs/70' => 'масса',
    'specs/attrs/70/71' => 'сухая',
    'specs/attrs/70/72' => 'снаряженная',
    'specs/attrs/70/73' => 'полная',
    'specs/attrs/22' => 'двигатель',
    'specs/attrs/22/100' => 'название',
    'specs/attrs/22/98' => 'топливо',
    'specs/attrs/22/98/options/28' => 'бензин',
    'specs/attrs/22/98/options/29' => 'водород',
    'specs/attrs/22/98/options/30' => 'биоэтанол',
    'specs/attrs/22/98/options/31' => 'электричество',
    'specs/attrs/22/98/options/32' => 'газ',
    'specs/attrs/22/98/options/33' => 'дизель',
    'specs/attrs/22/98/options/84' => 'Flex-fuel',
    'specs/attrs/22/98/options/36' => 'А-66',
    'specs/attrs/22/98/options/37' => 'А-70',
    'specs/attrs/22/98/options/38' => 'А-72',
    'specs/attrs/22/98/options/39' => 'А-76',
    'specs/attrs/22/98/options/40' => 'А-78',
    'specs/attrs/22/98/options/41' => 'А-80',
    'specs/attrs/22/98/options/42' => 'АИ-92',
    'specs/attrs/22/98/options/43' => 'АИ-93',
    'specs/attrs/22/98/options/44' => 'АИ-95',
    'specs/attrs/22/98/options/45' => 'АИ-98',
    'specs/attrs/22/98/options/34' => 'CNG',
    'specs/attrs/22/98/options/35' => 'LPG',
    'specs/attrs/22/19' => 'расположение',
    'specs/attrs/22/19/20' => 'расположение',
    'specs/attrs/22/19/20/options/1' => 'спереди',
    'specs/attrs/22/19/20/options/2' => 'сзади',
    'specs/attrs/22/19/20/options/3' => 'центральное',
    'specs/attrs/22/19/21' => 'ориентация',
    'specs/attrs/22/19/21/options/4' => 'продольно',
    'specs/attrs/22/19/21/options/5' => 'поперечно',
    'specs/attrs/22/23' => 'система питания',
    'specs/attrs/22/23/options/6' => 'инжектор',
    'specs/attrs/22/23/options/24' => 'карбюратор',
    'specs/attrs/22/23/options/25' => '2 карбюратора',
    'specs/attrs/22/23/options/55' => '3 карбюратора',
    'specs/attrs/22/23/options/26' => '4 карбюратора',
    'specs/attrs/22/23/options/27' => '6 карбюраторов',
    'specs/attrs/22/24' => 'цилиндры/клапаны',
    'specs/attrs/22/24/25' => 'количество цилиндров',
    'specs/attrs/22/24/26' => 'расположение цилиндров',
    'specs/attrs/22/24/26/options/7' => 'l',
    'specs/attrs/22/24/26/options/8' => 'V',
    'specs/attrs/22/24/26/options/9' => 'W',
    'specs/attrs/22/24/26/options/10' => 'O',
    'specs/attrs/22/24/26/options/101' => 'U',
    'specs/attrs/22/24/27' => 'клапанов на цилиндр',
    'specs/attrs/22/24/28' => 'диаметр цилиндров',
    'specs/attrs/22/24/29' => 'ход поршня',
    'specs/attrs/22/24/159' => 'угол развала',
    'specs/attrs/22/30' => 'степень сжатия',
    'specs/attrs/22/31' => 'объем',
    'specs/attrs/22/32' => 'мощность',
    'specs/attrs/22/32/33' => 'мощность',
    'specs/attrs/22/32/33/description' => 'Метрическая (PS)
1 HP = 1.014 metric PS or CV',
    'specs/attrs/22/32/34' => 'в диапазоне от',
    'specs/attrs/22/32/35' => 'в диапазоне до',
    'specs/attrs/22/32/171' => 'максимальная мощность (DIN)',
    'specs/attrs/22/32/171/description' => 'Мощность по DIN 70020. Европейский стандарт',
    'specs/attrs/22/32/172' => 'максимальная мощность (SAE certified)',
    'specs/attrs/22/32/172/description' => 'SAE Certified Power. Стандарт для US с 2005-06 года',
    'specs/attrs/22/32/173' => 'максимальная мощность (SAE net)',
    'specs/attrs/22/32/173/description' => 'Стандарт для US с 1971-72.
Трансмиссия не учитывается. Навесное оборудование - учитывается',
    'specs/attrs/22/32/174' => 'максимальная мощность (SAE gross)',
    'specs/attrs/22/32/174/description' => 'Стандарт US 1972 года, примерно соответствующий технологии измерения мощности до 1972.
Трансмиссия - не учитывется',
    'specs/attrs/22/32/177' => 'максимальная мощность (JIS D 1001)',
    'specs/attrs/22/32/178' => 'максимальная мощность (ГОСТ)',
    'specs/attrs/22/32/178/description' => 'Стандарт СССР и России',
    'specs/attrs/22/36' => 'крутящий момент',
    'specs/attrs/22/36/37' => 'крутящий момент',
    'specs/attrs/22/36/38' => 'в диапазоне от',
    'specs/attrs/22/36/39' => 'в диапазоне до',
    'specs/attrs/22/99' => 'турбонаддув',
    'specs/attrs/22/99/options/46' => 'нет',
    'specs/attrs/22/99/options/47' => 'есть',
    'specs/attrs/22/99/options/48' => '×2',
    'specs/attrs/22/99/options/54' => '×3',
    'specs/attrs/22/99/options/49' => '×4',
    'specs/attrs/engine/turbo/options/x6' => '×6',
    'specs/attrs/22/156' => 'материал блока',
    'specs/attrs/22/156/options/68' => 'чугун',
    'specs/attrs/22/156/options/69' => 'алюминиевый сплав',
    'specs/attrs/22/156/options/70' => 'сталь',
    'specs/attrs/22/156/options/83' => 'магниевый сплав',
    'specs/attrs/22/179' => 'охлаждение',
    'specs/attrs/22/179/options/81' => 'воздушное',
    'specs/attrs/22/179/options/82' => 'жидкостное',
    'specs/attrs/22/179/options/liquid-air' => 'жидкостно-воздушное',
    'specs/attrs/22/206' => 'Газораспределительный механизм',
    'specs/attrs/22/206/options/88' => 'Распредвал в блоке цилиндров',
    'specs/attrs/22/206/options/89' => 'Распредвал в головке цилиндров',
    'specs/attrs/22/206/options/90' => 'Десмодромный ГРМ',
    'specs/attrs/22/206/options/91' => 'ГРМ без распределительного вала',
    'specs/attrs/22/206/options/92' => 'Безклапанный',
    'specs/attrs/22/206/options/93' => 'Нижнеклапанный',
    'specs/attrs/22/206/options/94' => 'Со смешанным расположением клапанов',
    'specs/attrs/22/206/options/95' => 'OHV',
    'specs/attrs/22/206/options/100' => 'OHV с системой изменения фаз газораспределения',
    'specs/attrs/22/206/options/96' => 'SOHC',
    'specs/attrs/22/206/options/97' => 'SOHC с системой изменения фаз газораспределения',
    'specs/attrs/22/206/options/98' => 'DOHC',
    'specs/attrs/22/206/options/99' => 'DOHC с системой изменения фаз газораспределения',
    'specs/attrs/22/207' => 'тип',
    'specs/attrs/22/207/options/102' => 'Паровой',
    'specs/attrs/22/207/options/103' => 'Внутреннего сгорания',
    'specs/attrs/22/207/options/104' => 'Электродвигатель',
    'specs/attrs/22/207/options/105' => 'Поршневой',
    'specs/attrs/22/207/options/106' => 'Роторно-поршневой',
    'specs/attrs/22/207/options/107' => 'Турбинный',
    'specs/attrs/40' => 'трансмиссия',
    'specs/attrs/40/41' => 'привод',
    'specs/attrs/40/41/options/14' => 'передний',
    'specs/attrs/40/41/options/15' => 'задний',
    'specs/attrs/40/41/options/16' => 'полный',
    'specs/attrs/40/41/options/56' => 'передний на одно колесо',
    'specs/attrs/40/41/options/57' => 'задний на одно колесо',
    'specs/attrs/40/41/options/17' => 'полный с откл. задним',
    'specs/attrs/40/41/options/18' => 'полный с откл. передним',
    'specs/attrs/40/41/options/19' => 'постоянный полный',
    'specs/attrs/40/42' => 'коробка передач',
    'specs/attrs/40/42/43' => 'тип',
    'specs/attrs/40/42/43/options/20' => 'МКПП',
    'specs/attrs/40/42/43/options/21' => 'АКПП',
    'specs/attrs/40/42/43/options/22' => 'CVT',
    'specs/attrs/40/42/43/options/23' => 'полуавтомат',
    'specs/attrs/40/42/43/options/50' => 'роботизированная',
    'specs/attrs/40/42/43/options/87' => 'секвентальная',
    'specs/attrs/40/42/43/options/51' => 'DSG',
    'specs/attrs/40/42/43/options/52' => 'DCT',
    'specs/attrs/40/42/139' => 'название',
    'specs/attrs/40/42/44' => 'количество передач',
    'specs/attrs/40/83' => 'сцепление',
    'specs/attrs/15' => 'подвеска и рулевое управление',
    'specs/attrs/15/208' => 'передняя подвеска',
    'specs/attrs/15/208/209' => 'тип упругого элемента',
    'specs/attrs/15/208/209/options/108' => 'пружинная',
    'specs/attrs/15/208/209/options/109' => 'рессорная ',
    'specs/attrs/15/208/209/options/110' => 'пневматическая',
    'specs/attrs/15/208/209/options/111' => 'гидропневматическая',
    'specs/attrs/15/208/209/options/112' => 'торсионная',
    'specs/attrs/15/208/209/options/113' => 'на резиновых упругих элементах',
    'specs/attrs/15/208/209/options/178' => 'отсутствует',
    'specs/attrs/15/208/209/options/114' => 'пружинная с толкаемой штангой (Push-Rod)',
    'specs/attrs/15/208/209/options/115' => 'пружинная с тянущей штангой (Pull-Rod)',
    'specs/attrs/15/208/209/options/116' => 'рессорная на поперечных рессорах',
    'specs/attrs/15/208/209/options/117' => 'рессорная на продольных рессорах',
    'specs/attrs/15/208/209/options/124' => 'торсионная с толкаемой штангой (Push-Rod)',
    'specs/attrs/15/208/209/options/125' => 'торсионная с тянущей штангой (Pull-Rod)',
    'specs/attrs/15/208/209/options/118' => 'рессорная на продольных эллиптических рессорах',
    'specs/attrs/15/208/209/options/119' => 'рессорная на продольных ¾-эллиптических рессорах',
    'specs/attrs/15/208/209/options/120' => 'рессорная на продольных ¼-эллиптических рессорах',
    'specs/attrs/15/208/209/options/121' => 'рессорная на продольных полуэллиптических рессорах',
    'specs/attrs/15/208/209/options/122' => 'рессорная на продольных кантилеверных рессорах',
    'specs/attrs/15/208/209/options/123' => 'рессорная на продольных балансирных рессорах',
    'specs/attrs/15/208/210' => 'тип направляющего аппарата',
    'specs/attrs/15/208/210/options/126' => 'зависимая',
    'specs/attrs/15/208/210/options/127' => 'независимая',
    'specs/attrs/15/208/210/options/128' => 'полузависимая',
    'specs/attrs/15/208/210/options/129' => 'зависимая безрычажная',
    'specs/attrs/15/208/210/options/130' => 'зависимая с продольными рычагами',
    'specs/attrs/15/208/210/options/131' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod)',
    'specs/attrs/15/208/210/options/132' => 'независимая с качающимися полуосями',
    'specs/attrs/15/208/210/options/133' => 'независимая на продольных рычагах',
    'specs/attrs/15/208/210/options/134' => 'независимая подвеска Дюбонне',
    'specs/attrs/15/208/210/options/135' => 'независимая на косых рычагах',
    'specs/attrs/15/208/210/options/136' => 'независимая на двойных поперечных рычагах',
    'specs/attrs/15/208/210/options/137' => 'независимая многорычажная',
    'specs/attrs/15/208/210/options/138' => 'независимая свечная',
    'specs/attrs/15/208/210/options/139' => 'полузависимая Де Дион',
    'specs/attrs/15/208/210/options/140' => 'полузависимая торсионно-рычажная',
    'specs/attrs/15/208/210/options/141' => 'зависимая с продольными рычагами с механизмом Уатта',
    'specs/attrs/15/208/210/options/142' => 'зависимая с продольными рычагами с механизмом Скотта-Рассела',
    'specs/attrs/15/208/210/options/143' => 'зависимая с продольными рычагами с тягой Панара',
    'specs/attrs/15/208/210/options/144' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с механизмом Уатта',
    'specs/attrs/15/208/210/options/145' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с механизмом Скотта-Рассела',
    'specs/attrs/15/208/210/options/146' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с тягой Панара',
    'specs/attrs/15/208/210/options/147' => 'независимая свечная с качающейся свечой (McPherson)',
    'specs/attrs/15/208/210/options/149' => 'полузависимая торсионно-рычажная с механизмом Уатта',
    'specs/attrs/15/208/210/options/150' => 'полузависимая торсионно-рычажная с механизмом Скотта-Рассела',
    'specs/attrs/15/208/210/options/151' => 'полузависимая торсионно-рычажная с тягой Панара',
    'specs/attrs/15/208/210/options/148' => 'независимая свечная с качающейся свечой (McPherson) на продольных и поперечных рычагах',
    'specs/attrs/15/208/211' => 'амортизаторы',
    'specs/attrs/15/208/211/213' => 'наличие',
    'specs/attrs/15/208/211/214' => 'характер действия',
    'specs/attrs/15/208/211/214/options/152' => 'односторонний',
    'specs/attrs/15/208/211/214/options/153' => 'двухсторонний',
    'specs/attrs/15/208/211/215' => 'принцип действия',
    'specs/attrs/15/208/211/215/options/154' => 'фрикционный (механический)',
    'specs/attrs/15/208/211/215/options/155' => 'гидравлический',
    'specs/attrs/15/208/211/215/options/159' => 'газомаслянный (олеопневматический)',
    'specs/attrs/15/208/211/215/options/156' => 'гидравлический рычажный',
    'specs/attrs/15/208/211/215/options/157' => 'гидравлический двухтрубный',
    'specs/attrs/15/208/211/215/options/158' => 'гидравлический однотрубный',
    'specs/attrs/15/208/211/216' => 'регулируемость',
    'specs/attrs/15/208/212' => 'стабилизатор поперечной устойчивости',
    'specs/attrs/15/8' => 'тип передней подвески (уст.)',
    'specs/attrs/15/9' => 'тип задней подвески (уст.)',
    'specs/attrs/15/10' => 'тип рулевого управления',
    'specs/attrs/15/217' => 'задняя подвеска',
    'specs/attrs/15/217/218' => 'тип упругого элемента',
    'specs/attrs/15/217/218/options/160' => 'пружинная',
    'specs/attrs/15/217/218/options/163' => 'рессорная',
    'specs/attrs/15/217/218/options/172' => 'пневматическая',
    'specs/attrs/15/217/218/options/173' => 'гидропневматическая',
    'specs/attrs/15/217/218/options/174' => 'торсионная',
    'specs/attrs/15/217/218/options/177' => 'на резиновых упругих элементах',
    'specs/attrs/15/217/218/options/179' => 'отсутствует',
    'specs/attrs/15/217/218/options/161' => 'пружинная с толкаемой штангой (Push-Rod)',
    'specs/attrs/15/217/218/options/162' => 'пружинная с тянущей штангой (Pull-Rod)',
    'specs/attrs/15/217/218/options/164' => 'рессорная на поперечных рессорах',
    'specs/attrs/15/217/218/options/165' => 'рессорная на продольных рессорах',
    'specs/attrs/15/217/218/options/166' => 'рессорная на продольных эллиптических рессорах',
    'specs/attrs/15/217/218/options/167' => 'рессорная на продольных ¾-эллиптических рессорах',
    'specs/attrs/15/217/218/options/168' => 'рессорная на продольных ¼-эллиптических рессорах',
    'specs/attrs/15/217/218/options/169' => 'рессорная на продольных полуэллиптических рессорах',
    'specs/attrs/15/217/218/options/170' => 'рессорная на продольных кантилеверных рессорах',
    'specs/attrs/15/217/218/options/171' => 'рессорная на продольных балансирных рессорах',
    'specs/attrs/15/217/218/options/175' => 'торсионная с толкаемой штангой (Push-Rod)',
    'specs/attrs/15/217/218/options/176' => 'торсионная с тянущей штангой (Pull-Rod)',
    'specs/attrs/15/217/219' => 'тип направляющего аппарата',
    'specs/attrs/15/217/219/options/180' => 'зависимая',
    'specs/attrs/15/217/219/options/190' => 'независимая',
    'specs/attrs/15/217/219/options/200' => 'полузависимая',
    'specs/attrs/15/217/219/options/181' => 'зависимая безрычажная',
    'specs/attrs/15/217/219/options/182' => 'зависимая с продольными рычагами',
    'specs/attrs/15/217/219/options/186' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod)',
    'specs/attrs/15/217/219/options/183' => 'зависимая с продольными рычагами с механизмом Уатта',
    'specs/attrs/15/217/219/options/184' => 'зависимая с продольными рычагами с механизмом Скотта-Рассела',
    'specs/attrs/15/217/219/options/185' => 'зависимая с продольными рычагами с тягой Панара',
    'specs/attrs/15/217/219/options/187' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с механизмом Уатта',
    'specs/attrs/15/217/219/options/188' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с механизмом Скотта-Рассела',
    'specs/attrs/15/217/219/options/189' => 'зависимая с упорной трубой или дышлом (Torque-tube или Torque-Rod) с тягой Панара',
    'specs/attrs/15/217/219/options/191' => 'независимая с качающимися полуосями',
    'specs/attrs/15/217/219/options/192' => 'независимая на продольных рычагах',
    'specs/attrs/15/217/219/options/193' => 'независимая подвеска Дюбонне',
    'specs/attrs/15/217/219/options/194' => 'независимая на косых рычагах',
    'specs/attrs/15/217/219/options/195' => 'независимая на двойных поперечных рычагах',
    'specs/attrs/15/217/219/options/196' => 'независимая многорычажная',
    'specs/attrs/15/217/219/options/197' => 'независимая свечная',
    'specs/attrs/15/217/219/options/198' => 'независимая свечная с качающейся свечой (McPherson)',
    'specs/attrs/15/217/219/options/199' => 'независимая свечная с качающейся свечой (McPherson) на продольных и поперечных рычагах',
    'specs/attrs/15/217/219/options/201' => 'полузависимая Де Дион',
    'specs/attrs/15/217/219/options/202' => 'полузависимая торсионно-рычажная',
    'specs/attrs/15/217/219/options/203' => 'полузависимая торсионно-рычажная с механизмом Уатта',
    'specs/attrs/15/217/219/options/204' => 'полузависимая торсионно-рычажная с механизмом Скотта-Рассела',
    'specs/attrs/15/217/219/options/205' => 'полузависимая торсионно-рычажная с тягой Панара',
    'specs/attrs/15/217/220' => 'амортизаторы',
    'specs/attrs/15/217/220/222' => 'наличие',
    'specs/attrs/15/217/220/223' => 'характер действия',
    'specs/attrs/15/217/220/223/options/206' => 'односторонний',
    'specs/attrs/15/217/220/223/options/207' => 'двухсторонний',
    'specs/attrs/15/217/220/224' => 'принцип действия',
    'specs/attrs/15/217/220/224/options/208' => 'фрикционный (механический)',
    'specs/attrs/15/217/220/224/options/209' => 'гидравлический',
    'specs/attrs/15/217/220/224/options/213' => 'газомаслянный (олеопневматический)',
    'specs/attrs/15/217/220/224/options/210' => 'гидравлический рычажный',
    'specs/attrs/15/217/220/224/options/211' => 'гидравлический двухтрубный',
    'specs/attrs/15/217/220/224/options/212' => 'гидравлический однотрубный',
    'specs/attrs/15/217/220/225' => 'регулируемость',
    'specs/attrs/15/217/221' => 'стабилизатор поперечной устойчивости',
    'specs/attrs/74' => 'тормозная система',
    'specs/attrs/74/77' => 'ABS',
    'specs/attrs/74/142' => 'передние тормоза',
    'specs/attrs/74/142/75' => 'описание',
    'specs/attrs/74/142/144' => 'тип',
    'specs/attrs/74/142/144/options/58' => 'барабанные',
    'specs/attrs/74/142/144/options/59' => 'дисковые',
    'specs/attrs/74/142/146' => 'диаметр',
    'specs/attrs/74/142/148' => 'толщина',
    'specs/attrs/74/142/150' => 'материал',
    'specs/attrs/74/142/150/options/62' => 'металл',
    'specs/attrs/74/142/150/options/63' => 'карбон',
    'specs/attrs/74/142/150/options/64' => 'керамика',
    'specs/attrs/74/142/152' => 'вентилируемые',
    'specs/attrs/74/142/153' => 'перфорированные',
    'specs/attrs/74/143' => 'задние тормоза',
    'specs/attrs/74/143/76' => 'описание',
    'specs/attrs/74/143/145' => 'тип',
    'specs/attrs/74/143/145/options/60' => 'барабанные',
    'specs/attrs/74/143/145/options/61' => 'дисковые',
    'specs/attrs/74/143/147' => 'диаметр',
    'specs/attrs/74/143/149' => 'толщина',
    'specs/attrs/74/143/151' => 'материал',
    'specs/attrs/74/143/151/options/65' => 'металл',
    'specs/attrs/74/143/151/options/66' => 'карбон',
    'specs/attrs/74/143/151/options/67' => 'керамика',
    'specs/attrs/74/143/154' => 'вентилируемые',
    'specs/attrs/74/143/155' => 'перфорированные',
    'specs/attrs/181' => 'электрика',
    'specs/attrs/181/182' => 'напряжение бортовой сети',
    'specs/attrs/46' => 'динамические характеристики',
    'specs/attrs/46/47' => 'максимальная скорость',
    'specs/attrs/46/180' => 'разгон до 60 км/ч',
    'specs/attrs/46/48' => 'разгон до 100 км/ч',
    'specs/attrs/46/175' => 'разгон до 60 миль/ч',
    'specs/attrs/46/49' => 'разгон до 200 км/ч',
    'specs/attrs/46/50' => 'разгон до 300 км/ч',
    'specs/attrs/46/51' => 'время пробега 400м',
    'specs/attrs/46/52' => 'время пробега 1000м',
    'specs/attrs/46/53' => 'ограничитель скорости',
    'specs/attrs/46/160' => 'время торможения со 100км/ч',
    'specs/attrs/46/161' => 'тормозной путь со 100км/ч',
    'specs/attrs/54' => 'эксплуатационные характеристики',
    'specs/attrs/54/55' => 'угол въезда',
    'specs/attrs/54/56' => 'угол съезда',
    'specs/attrs/54/57' => 'объем топливного бака',
    'specs/attrs/54/57/58' => 'основной',
    'specs/attrs/54/57/59' => 'дополнительный',
    'specs/attrs/54/60' => 'объём багажника',
    'specs/attrs/54/60/61' => 'мин',
    'specs/attrs/54/60/62' => 'макс',
    'specs/attrs/54/78' => 'расход топлива',
    'specs/attrs/54/78/183' => 'Неустановленный метод',
    'specs/attrs/54/78/183/79' => 'в городе',
    'specs/attrs/54/78/183/80' => 'на трассе',
    'specs/attrs/54/78/183/81' => 'смешанный режим',
    'specs/attrs/54/78/184' => 'ECE',
    'specs/attrs/54/78/184/185' => '90 км/ч',
    'specs/attrs/54/78/184/186' => '120 км/ч',
    'specs/attrs/54/78/184/187' => 'city',
    'specs/attrs/54/78/184/188' => 'combined',
    'specs/attrs/54/78/189' => 'EPA (до 2008)',
    'specs/attrs/54/78/189/190' => 'city',
    'specs/attrs/54/78/189/191' => 'highway',
    'specs/attrs/54/78/192' => 'EPA (с 2008)',
    'specs/attrs/54/78/192/193' => 'city',
    'specs/attrs/54/78/192/194' => 'highway',
    'specs/attrs/54/78/199' => 'EU 93/116/EC',
    'specs/attrs/54/78/199/200' => 'urban',
    'specs/attrs/54/78/199/201' => 'extra urban',
    'specs/attrs/54/78/199/202' => 'combined',
    'specs/attrs/54/78/199/202/description' => '36.8% urban + 63.2% extra urban',
    'specs/attrs/54/138' => 'Система "старт-стоп"',
    'specs/attrs/54/158' => 'грузоподъемность',
    'specs/attrs/54/205' => 'масса буксируемого прицепа',
    'specs/attrs/54/226' => 'объема кузова',
    'specs/attrs/54/195' => 'разворот',
    'specs/attrs/54/195/11' => 'диаметр',
    'specs/attrs/54/195/11/description' => 'осевой. 2×радиус',
    'specs/attrs/54/195/196' => 'от стены к стене',
    'specs/attrs/54/195/196/description' => 'wall-to-wall',
    'specs/attrs/54/195/197' => 'от бордюра к бордюру',
    'specs/attrs/54/195/197/description' => 'curb-to-curb',
    'specs/attrs/54/198' => 'оборотов руля от упора до упора',
    'specs/attrs/84' => 'колёса и диски ',
    'specs/attrs/84/85' => 'передние',
    'specs/attrs/84/85/87' => 'ширина покрышек',
    'specs/attrs/84/85/90' => 'высота покрышек',
    'specs/attrs/84/85/88' => 'диаметр',
    'specs/attrs/84/85/89' => 'ширина диска',
    'specs/attrs/84/85/162' => 'вылет диска',
    'specs/attrs/84/86' => 'задние',
    'specs/attrs/84/86/91' => 'ширина покрышек',
    'specs/attrs/84/86/94' => 'высота покрышек',
    'specs/attrs/84/86/92' => 'диаметр',
    'specs/attrs/84/86/93' => 'ширина диска',
    'specs/attrs/84/86/163' => 'вылет диска',
    'specs/attrs/84/164' => 'модель дисков',
    'specs/attrs/84/165' => 'материал дисков',
    'specs/attrs/84/165/options/78' => 'сталь',
    'specs/attrs/84/165/options/79' => 'алюминиевый сплав (литьё)',
    'specs/attrs/84/165/options/80' => 'алюминиевый сплав (ковка)',
    'specs/attrs/82' => 'вредные выбросы',
    'specs/attrs/157' => 'норма выбросов',
    'specs/attrs/157/options/71' => 'Euro 1',
    'specs/attrs/157/options/72' => 'Euro 2',
    'specs/attrs/157/options/73' => 'Euro 3',
    'specs/attrs/157/options/74' => 'Euro 4',
    'specs/attrs/157/options/75' => 'Euro 5',
    'specs/attrs/157/options/76' => 'Euro 5+',
    'specs/attrs/157/options/77' => 'Euro 6',
    'specs/attrs/170' => 'место производства',

    'specs/unit/1/abbr' => 'мм',
    'specs/unit/1/name' => 'миллиметр',
    'specs/unit/2/abbr' => 'кг',
    'specs/unit/2/name' => 'килограмм',
    'specs/unit/3/abbr' => 'м',
    'specs/unit/3/name' => 'метр',
    'specs/unit/4/abbr' => 'см³',
    'specs/unit/4/name' => 'кубический сантиметр',
    'specs/unit/5/abbr' => 'л.с.',
    'specs/unit/5/name' => 'лошадиная сила',
    'specs/unit/6/abbr' => 'об/мин',
    'specs/unit/6/name' => 'оборотов в минуту',
    'specs/unit/7/abbr' => 'Нм',
    'specs/unit/7/name' => 'Ньютон-метр',
    'specs/unit/8/abbr' => 'км/ч',
    'specs/unit/8/name' => 'километров в час',
    'specs/unit/9/abbr' => 'сек',
    'specs/unit/9/name' => 'секунда',
    'specs/unit/10/abbr' => '%',
    'specs/unit/10/name' => 'процент',
    'specs/unit/11/abbr' => '°',
    'specs/unit/11/name' => 'градус',
    'specs/unit/12/abbr' => 'л',
    'specs/unit/12/name' => 'литр',
    'specs/unit/13/abbr' => 'л/100км',
    'specs/unit/13/name' => 'литров на 100 километров',
    'specs/unit/14/abbr' => 'CO2 г/км',
    'specs/unit/14/name' => 'грамм CO2 на километр',
    'specs/unit/15/abbr' => '″',
    'specs/unit/15/name' => 'дюйм',
    'specs/unit/16/abbr' => 'г.',
    'specs/unit/16/name' => 'год',
    'specs/unit/17/abbr' => 'PS',
    'specs/unit/17/name' => 'Pferdestärke',
    'specs/unit/18/abbr' => 'кВт',
    'specs/unit/18/name' => 'киловатт',
    'specs/unit/19/abbr' => 'V',
    'specs/unit/19/name' => 'вольт',
    'specs/unit/20/abbr' => '',
    'specs/unit/20/name' => 'м³',

    'telegram/info' => '[Telegram](https://telegram.org/) - это в первую очередь система обмена мгновенными сообщениями, подобная whatsapp или viber.

Кроме привычного обмена сообщениями и файлами, здесь есть множество других возможностей, на описание которых уйдёт много времени.

В работе сайта мы используем лишь две из них: публичные группы и боты.

# Публичная группа

Есть открыте русскоязычный и англоязычный группы для всех посетителей сайта.

Войти в них очень просто - достаточно перейти по ссылке и следовать инструкциям:

* [русскоязычный](https://t.me/joinchat/AAAAAA0NvB5g7SEsWv61Rw)
* [англоязычный](https://t.me/joinchat/AAAAAAvxJESUMQcUM-I5YA)

# Бот

Для вашего и нашего удобства мы создали "бота" в приложении [telegram](https://telegram.org/), который позволит улучшить ваш опыт взаимодействия с сайтом.

Зовут его просто: [@autowp_bot](tg:msg).

Если кратко: бот, это пользователь телеграмм, с который может присылать вам сообщения, подготовленные нашим сайтом.

Подробнее о ботах telegram можно почитать тут <https://core.telegram.org/bots/faq>

На текущий момент поддерживается 2 близкие функции:

* Уведомления о новых личных сообщениях. [Подробнее ...](#messages)
* Уведомления о новых принятых на сайт изображениях. [Подробнее ...](#new)
* Уведомления о новых загруженных (но еще не принятых) изображениях (только для зарегистрированных пользователей). [Подробнее ...](#inbox)

## Команды бота

### Старт: `/start`

Отправив эту команду в ответ вы получите список поддерживаемых команд.

### <a name="messages"></a> Личные сообщения: `/messages`

Отправьте `/messages on`, чтобы подписаться на получение уведомлений.

Отправьте `/messages off`, чтобы отписаться.

### <a name="new"></a> Новые изображения: `/new`

Отправьте `/new BMW`, чтобы подписаться на получение новых фотографий BMW.

Отправьте `/new BMW` повторно, чтобы отписаться.

### <a name="inbox"></a> Инбокс: `/inbox`

Требуется предварительная авторизация командой `/me`

Отправьте `/inbox BMW`, чтобы подписаться на получение уведомления о новых загруженных, но ещё не принятных фотографий BMW.

Отправьте `/inbox BMW` повторно, чтобы отписаться.

### Я (авторизация): `/me`

Эта команда подзволяет вам ассоциировать себя (пользователя telegram) с учётной записью на нашем сайте.

Отправьте `/me`, чтобы получить инструкции по выполнению авторизации.

Отправьте `/me 123456789`, чтобы получить код подтверждения.

Здесь 123456789 - номер вашей учётной записи на нашем сайте, который вы можете найти на странице своего профиля. Например, номер [Juliano Scotini](/users/juliano-scotini): 17322

Код подтверждения будет отправлен вам через [систему личных сообщений](/ng/account/messages?folder=system)

Отправьте `/me 123456789 ХХХХХХХХХХХХХХХХ`, чтобы завершить процесс ассоциации вашей учётной записи telegram с пользователем найшего сайта.

Здесь `ХХХХХХХХХХХХХХХХ` - код, который будет отправлен вам через [систему личных сообщений](/ng/account/messages?folder=system)',

    'personal-message-dialog/title' => 'Отправить личное сообщение',
    'personal-message-dialog/send' => 'отправить',
    'personal-message-dialog/sending' => 'отправляется ...',
    'personal-message-dialog/sent' => 'отправлено',
    'personal-message-dialog/cancel' => 'отменить',
    'personal-message-dialog/placeholder' => 'Текст сообщения',

    'crop-dialog/title' => 'Кадрирование',
    'crop-dialog/close' => 'Закрыть',
    'crop-dialog/select-all' => 'Выделить всё',
    'crop-dialog/save' => 'Сохранить',
    'crop-dialog/resolution-%s-aspect-%s' => '%s (пропорции %s)',
    'crop-dialog/resolution-x-aspect-y' => '{resolution} (пропорции {aspect})',

    'who-online/title' => 'На сайте',
    'who-online/refresh' => 'Обновить',
    'who-online/close' => 'Закрыть',

    'picture-moder-vote/custom/title' => 'Своя причина',
    'picture-moder-vote/custom/sending' => 'отправляется ...',
    'picture-moder-vote/custom/send' => 'отправлено',
    'picture-moder-vote/custom/cancel' => 'отменить',
    'picture-moder-vote/custom/save' => 'Сохранить как шаблон',

    'moder/statistics/photos-with-copyrights' => 'Фотографий с копирайтами',
    'moder/statistics/vehicles-with-4-or-more-photos' => 'Автомобилей с 4 и более фото',
    'moder/statistics/specifications-values' => 'Заполненных значений ТТХ',
    'moder/statistics/brand-logos' => 'Логотипов брендов',
    'moder/statistics/from-years' => 'Годы начала выпуска автомобилей',
    'moder/statistics/from-and-to-years' => 'Годы начала и окончания выпуска автомобилей',
    'moder/statistics/from-and-to-years-and-months' => 'Годы и месяцы начала и окончания выпуска автомобилей'
]);
