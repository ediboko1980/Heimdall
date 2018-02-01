@extends('app')

@section('content')
        <section class="module-container">
            <header>
                <div class="section-title">Application list</div>
                <div class="module-actions">
                    <a href="{{ route('items.create') }}" title="" class="button"><i class="fa fa-plus"></i><span>Add</span></a>
                </div>
            </header>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Url</th>
                        <th class="text-center" width="100">Edit</th>
                        <th class="text-center" width="100">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if($apps->first())
                        @foreach($apps as $app)
                            <tr>
                                <td>{{ $app->title }}</td>
                                <td>{{ $app->description }}</td>
                                <td>{{ $app->url }}</td>
                                <td class="text-center"><a href="{!! route('items.edit', $app->id) !!}" title="Edit {!! $app->title !!}"><i class="fas fa-edit"></i></a></td>
                                <td class="text-center">
                                        {!! Form::open(['method' => 'DELETE','route' => ['items.destroy', $app->id],'style'=>'display:inline']) !!}
                                        <button type="submit"><i class="fa fa-trash-alt"></i></button>
                                        {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="form-error text-center">
                                <strong>No items found</strong>
                            </td>
                        </tr>
                    @endif

                
                </tbody>
            </table>
        </section>


@endsection