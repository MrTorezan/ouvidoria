 <div class="row">
  <div class="form-group col-3">
  <label for="name">Tipo de Manifestação</label>
  <select name="type" id="type" class="form-control">
    <option value="suggestion">Sugestão</option>
    <option value="compliment">Elogio</option>
    <option value="report">Denúncia</option>
    <option value="complaint">Reclamação</option>
    <option value="solicitation">Solicitação</option>
  </select>
</div>
<div class="form-group col-3">
  <label for="id_department">Setor</label>
  <select name="id_department" id="id_department" class="form-control">
    @foreach ($departments as $department)
      <option value="{{$department->id}}">{{$department->name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group col-3">
  <label for="name">Origem</label>
  <select name="type" id="type" class="form-control">
     @foreach ($origins as $origin)
      <option value="{{$origin->id}}">{{$origin->name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group col-3">
  <label for="date">Data da Manifestação</label>
  <input class="form-control" type="date" name="manifestation_date" id="">
</div>
</div>
<div class="form-group">
  <input type="text" name="complainer" class="form-control" id="complainer" placeholder="Nome do Manifestante">
</div>
<div class="row">
  <div class="form-group col-6">
    <input type="text" name="complainer_phone" class="form-control" id="complainer_phone" placeholder="Telefone para Contato">
  </div>
  <div class="form-group col-6">
    <input type="mail" name="complainer_email" class="form-control" id="complainer_email" placeholder="E-Mail do Manifestante">
  </div> 
</div>
<div class="form-group">
  <label for="description">Descrição</label>
  <textarea name="description" id="" class="form-control" style="min-height: 150px"></textarea>
</div>
