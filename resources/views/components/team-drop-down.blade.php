<div>
    <select name="school">
        @foreach ($schools as $school)
            <option value="{{ $school->id }}">{{$school->name}}</option>
        @endforeach
    </select>
</div>
