<div>
  <!-- Simplicity is an acquired taste. - Katharine Gerould -->
  <h1>my name is {{ $name }}</h1>
  @foreach ($jops as $jop)
    <div>{{ $jop['title'] }}  : {{ $jop['Salary'] }}</div>
  @endforeach
</div>
