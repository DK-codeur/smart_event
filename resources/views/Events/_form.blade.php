<div class="form-group {{$errors->has('title') ? 'has-error' : '' }}">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" placeholder="Titre de l'evenement" class="form-control" value="{{ old('title') ?? $event->title}}">
    {!! $errors->first('title', '<div class="error-msg">:message</div>') !!}
</div>
<br>

<div class="form-group {{$errors->has('description') ? 'has-error' : '' }}">
    <label for="description">Description :</label> <br>
    <textarea name="description" id="description" cols="30" rows="5" placeholder="Decrivez votre evenement" class="form-control">{{old('description') ?: $event->description}}</textarea>
    {!! $errors->first('description', '<div class="error-msg">:message</div>') !!}
</div>

<div class="form-group">
    <input type="submit" value="{{ $submitButtonText }}" class="{{ $submitButtonClass }} btn-block">
</div>