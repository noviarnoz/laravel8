<table class="table" >
   <thead class="thead-dark">
       <tr>
           <th>no</th>
           <th>judul</th>
           <th>isi</th>
           <th>aksi</th>
       </tr>
    </thead>
    <tbody>
        @foreach($berita as sistem)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $sistem->judul }}</td>
           <td>{{ $sistem->isi }}</td>
           <td></td>
        </tr>
        @endforeach
    </tbody>
</table>    

@endsection
