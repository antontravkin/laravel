@extends ('sample')

@section ('title') Страница 2 @endsection

@section ('content')

<h1>Отзывы</h1>

@if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $el)
                <li style="color:red">{{ $el }}</li>            
            @endforeach
        </ul>
    </div>
@endif 
    

<form action="check" method="post">
    @csrf
    <textarea name="message" id="message" cols="30" rows="10" style="resize: none"></textarea><br>
    <input type="submit" value="отправить">
</form>


<div class="chat">
    
    @foreach ($message as $el)
        <li>
            {{$el->message}}
        </li>            
    @endforeach
</div>

@endsection