<h1>Lista de Professores</h1>

<table>
    <thead>
        <tr>
            <th>Nome do Professor</th>
            <th>Link da Reunião</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td><a href="{{ route('meet-link', ['link' => $teacher->meeting_link]) }}">Entrar na Reunião</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
