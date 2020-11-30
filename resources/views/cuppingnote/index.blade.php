@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Coffee Bean Cupping Notes</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('note.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Cupping Notes</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Bean Name</th>
                    <th scope="col">Cupping Notes</th>
                    <th scope="col">Acidity Level</th>
                    <th scope="col">After Taste</th>
                    <th scope="col">Body Level</th>
                </tr>
                </thead>
                <tbody>

                @foreach($notes as $note)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td>{{ $note->bean->bean_name }}</td>
                    <td><a href="{{ route('note.edit', $note) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $note->cupping_note }}</a></td>
                        <td>{{ $note->acidity_level }}</td>
                        <td>{{ $note->aftertaste }}</td>
                        <td>{{ $note->body_level }}</td>
                        <td>
                            <form action="{{ route('note.destroy', $note) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
