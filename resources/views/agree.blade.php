<link rel="stylesheet" href="css/auth.css">
@extends('template')

@section('title', 'Согласие на обработку персональных данных')

@section('content')

<div class="agree-text">
    <p>Предоставляя свои персональные данные Пользователь даёт согласие на обработку, хранение и использование своих
        персональных данных на основании ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. в следующих целях:</p>
    <li>Осуществление клиентской поддержки</li>
    <li>Получения Пользователем информации о маркетинговых событиях</li>
    <li>Проведения аудита и прочих внутренних исследований с целью повышения качества предоставляемых услуг.</li>
    <p>Под персональными данными подразумевается любая информация личного характера, позволяющая установить личность
        Пользователя/Покупателя такая как:</p>
    <li>Фамилия, Имя, Отчество</li>
    <li>Дата рождения</li>
    <li>Контактный телефон</li>
    <li>Адрес электронной почты</li>
    <li>Почтовый адрес</li>
    <p>Персональные данные Пользователей хранятся исключительно на электронных носителях и обрабатываются с
        использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка
        персональных данных необходима в связи с исполнением требований законодательства.</p>
    <p>Компания обязуется не передавать полученные персональные данные третьим лицам, за исключением следующих случаев:
    </p>
    <li>По запросам уполномоченных органов государственной власти РФ только по основаниям и в порядке, установленным
        законодательством РФ</li>
    <li>Стратегическим партнерам, которые работают с Компанией для предоставления продуктов и услуг, или тем из них,
        которые помогают Компании реализовывать продукты и услуги потребителям. Мы предоставляем третьим лицам
        минимальный объем персональных данных, необходимый только для оказания требуемой услуги или проведения
        необходимой транзакции.</li>
    <p>Компания оставляет за собой право вносить изменения в одностороннем порядке в настоящие правила, при условии, что
        изменения не противоречат действующему законодательству РФ. Изменения условий настоящих правил вступают в силу
        после их публикации на Сайте.</p>
</div>
@endsection


@section('back')
<a href={{Route('registration')}}>ok</a>
@endsection