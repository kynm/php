<div id="sf3" class="frm" style="display:none">
    <fieldset>
        <legend>Projects</legend>
        <div class="form-group">
            <label class="col-lg-1 control-label" for="projects">Projects </label>
            <div class="col-lg-11">
                <div class="add-projects">
                    <div class="entry input-group col-xs-11">
                        <div class="form-group">
                            <label class=" control-label" for="projects">name </label>
                            <input type="text" placeholder="School, university, certificates, etc..." name="projects[0][name]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="projects">Project description </label>
                            <textarea type="text" placeholder="Project description" name="projects[0][description]" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="projects">Team size </label>
                            <input type="text" placeholder="Team size" name="projects[0][team_site]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="projects">Role in a team </label>
                            <input type="text" placeholder="Role in a team" name="projects[0][role]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="projects">Description of job on a project </label>
                            <textarea type="text" placeholder="Description of job on a project" name="projects[0][description_job]" class="form-control"></textarea> 
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="projects">Upload project <br>(if you are allowed to share source) </label>
                            <input type="file" name="projects[0][file]" multiple="multiple">
                        </div>
                        <div class="clearfix" style="height: 10px;clear: both;"></div>
                        <div class="clearfix" style="height: 10px;clear: both;"></div>
                        <div class="clearfix" style="height: 10px;clear: both;"></div>
                        <div class="clearfix" style="height: 10px;clear: both;"></div>
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add-project" type="button" target-id="add-projects">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix" style="height: 10px;clear: both;"></div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
            <input class="btn btn-primary open3" type="submit"> 
            <img src="spinner.gif" alt="" id="loader" style="display: none">
          </div>
        </div>
    </fieldset>
</div>