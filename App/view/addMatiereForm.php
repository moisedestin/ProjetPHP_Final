<form id="addMatiereForm" method="post" action="controller/addMatiere.php">

    <div class="form-group">
        <label for="code_matiere">Code Matiere</label>
        <input type="text" class="form-control" id="code_matiere" name="code_matiere">
    </div>
    <div class="form-group">
        <label for="matiere">Matiere</label>
        <input type="text" class="form-control" id="matiere" name="matiere">
    </div>

    <div class="form-group">
        <label for="domaine">Domaine</label>
        <select class="form-control" id="domaine" name="domaine">
            <option value="gestion">Gestion</option>
            <option value="L1">L1</option>
        </select>
    </div>
</form>