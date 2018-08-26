<div>
    Hello Ms.Phuong,

    You received 1 feedback from <i>{{ $data['name'] }}</i>

    <b> Sender info: </b>
    ( {{ $data['phone'] or 'No phone' }} ),
    ( {{ $data['mail'] or 'No mail' }} ),

    <b>{{ $data['subject'] }}</b>
    <p>{{ $data['content'] }}</p>

    Thank You,
    <br/>
    <i>IBLC Firm</i>
</div>