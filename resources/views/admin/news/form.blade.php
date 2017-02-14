<?php $selectedCategory = old('category', isset($item)? $item->category: ''); ?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ csrf_field() }}
<div class="form-group">
    <label for="category">category:</label>
    <select name="category">
        <option value="">-- please select one -- </option>
        @foreach($categories as $id => $label)
        <option value="{{ $id }}" {!!  $selectedCategory == $id? 'selected="selected"': '' !!}>{{ $label }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', isset($item)? $item->title: '') }}" />
</div>
<div class="form-group">
    <button type="submit">submit</button>
</div>