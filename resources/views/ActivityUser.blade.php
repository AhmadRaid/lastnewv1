
    <table>
        <tr>
            @foreach($users as $user)
            <td>
                @if($user ->isOnline())
                    <li>
                    Online
                    </li>
                @else
                    <li>
                    Offline
                    </li>
            </td>
            @endif
        </tr>
        @endforeach

    </table>

