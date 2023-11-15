<div style="display: flex; align-items: center; width: 300px;">
  <h4 style="width: 440px; margin-right: 10px;">Tafel van:</h2>
    <input type="number" class="form-control" placeholder="1" id="tafelInput" style="margin-right: 10px;">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tafelCollapse" aria-expanded="false" aria-controls="tafelCollapse" onClick="genereerTafel()">Genereer</button>
</div><br>

<div class="collapse" id="tafelCollapse">
  <div id="tafel" class="card card-body"></div>
</div>

<script src="../js/main.js"></script>