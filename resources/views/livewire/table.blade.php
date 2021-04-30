<h2>lista de Posts</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>Fone</th>
            <th colspan="2"&nbsp;></th>
        </tr>
    </thead>
    <tbody>
     @foreach($posts as $post)
      <tr>
          <td>{{ $post->id }}</td>
          <td>{{ $post->nome }}</td>
          <td>{{ $post->fone }}</td>
          <td>
              <button class="btn btn-primary">
                  Editar
              </button>
          </td>
          <td>
            <button class="btn btn-danger">
                Deletar
            </button>
        </td>
      </tr>
         
     @endforeach

    </tbody>
</table>

{{-- https://www.youtube.com/watch?v=Cct1MgxXRWU&list=PLhCiuvlix-rSRRmZAL2CNOMAUjgEiFoSl&index=4  --}}