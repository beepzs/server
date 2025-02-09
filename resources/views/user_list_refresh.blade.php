<table class="table" id="user-table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($userList as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->password }}</td>
         <td>{{ $user->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>