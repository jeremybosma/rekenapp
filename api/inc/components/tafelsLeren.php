<form class="row g-3 mb-2" style="width: 450px;">
  <div class="col-md-3" style="text-align: left;">
    <label for="inputTafelvan" class="form-label">Tafel van</label>
    <input type="number" class="form-control" id="tafelInput" value="1">
  </div>
  <div class="col-md-4 align-self-end d-grid">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tafelCollapse"
      aria-expanded="false" aria-controls="tafelCollapse" onClick="genereerTafel()">Genereer Tafel</button>
  </div>
</form>

<div class="collapse" id="tafelCollapse">
  <div id="tafel" class="card card-body"></div>
</div>