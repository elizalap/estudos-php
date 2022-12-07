<form action="{{ route('site.store') }}" method="post">
   @csrf
   @method('POST')
   <input name="nome" type="text" value="{{ old('nome')}}" placeholder="Nome" class="{{ $classe }}">
   {{$errors->has('nome') ? $errors->first('nome') : ''}}
   <br>
   <input name="telefone" type="text" value="{{ old('telefone')}}" placeholder="Telefone" class="{{ $classe }}">
   {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
   <br>
   <input name="email" type="text" value="{{ old('email')}}" placeholder="E-mail" class="{{ $classe }}">
   {{$errors->has('email') ? $errors->first('email') : ''}}
   <br>

   <select name="motivo_contatos_id" class="{{ $classe }}">
       <option value="">Qual o motivo do contato?</option>
       @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
       @endforeach
   </select>
   {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
   <br>

   <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}
    </textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
   <br>
   <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
