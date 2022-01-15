
                <ul>
                @forelse ($errors->all( ) as $error)
                    <li style="color: red">{{$error}}</li>
                @empty
                @endforelse
            </ul>