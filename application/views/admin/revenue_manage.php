
<section class="edu_admin_content">
	<div class="edu_admin_right sectionHolder edu_gallery_manager">
	     <?php if($_SESSION['super_admin'] == '1'){ ?>
  <div class="edu_table_wrapper mb_30">
      <div class="edu_admin_informationdiv sectionHolder">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                  <div class="form-group">
                      <span>
                          <select class="form-control filter_admin edu_selectbox_with_search onchange_fetch" name="admin" data-placeholder="<?php echo html_escape($this->common->languageTranslator('ltr_select_user'));?>" data-count="no">
                              <option value=""><?php echo html_escape($this->common->languageTranslator('ltr_select_user'));?></option>
                              <?php
                              
                              if(!empty($all_user)){
                                  foreach($all_user as $user){
                                       if($user['super_admin'] == 1){
                                         $nm = "Super Admin";    
                                           echo '<option value="'.$user['id'].'">'.$user['name'].'  '.'  '.'('.$nm.')'.'</option>';
                                        }else if($user['super_admin'] == 0 && $user['role']==1){
                                             $nm = "Sub-Admin"; 
                                               echo '<option value="'.$user['id'].'">'.$user['name'].'  '.'  '.'('.$nm.')'.'</option>';
                                        }
                                  }
                              }
                              ?> 
                          </select>
                      </span>
                  </div>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <span>
                          <div class="pxn_admin_btnsection">
                              <input type="button" id="serching_data" value="<?php echo html_escape($this->common->languageTranslator('ltr_search'));?>" class="btn btn-primary filter_by_admin"/>
                          </div>
                      </span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php } ?>
	    <div class="createDivWrapper edu_add_question create_ppr_popup hide">
    		<div class="edu_admin_informationdiv sectionHolder">
    		    <div class="ppr_popup_inner">
        			<div class="row align-items-center text-center">
        			    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<button class="multiDelete btn_delete btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete" data-table="gallery" data-column="id"><?php echo html_escape($this->common->languageTranslator('ltr_delete'));?></button>
        		</div>
					</div>
        		</div>
    		</div>
		</div>
		<?php 
    		if(!empty($_SESSION['uid'])){
    		?> 
	    <div class="edu_main_wrapper edu_table_wrapper">
		    <div class="edu_admin_informationdiv sectionHolder">
                <div class="tableFullWrapper">
                    
                    <table class="server_datatable table table-striped table-hover dt-responsive" cellspacing="0" width="100%" data-url="ajaxcall/revanue_table">
                        <thead>
                            <tr>    
                            <th>#</th>
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_batch_name'));?></th>
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_start_date'));?></th>
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_end_date'));?></th>                     
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_amount'));?></th>
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_Total_sale'));?></th>                   
                            <th><?php echo html_escape($this->common->languageTranslator('ltr_Total_Amount'));?></th>      
                               
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
		<?php 
			}else{ 
			     echo '<section class="edu_admin_content">
                        <div class="edu_admin_right sectionHolder edu_add_users">
                            <div class="edu_admin_informationdiv edu_main_wrapper">
                                <div class="eac_text eac_page_re">'.html_escape($this->common->languageTranslator('ltr_no_record')).'</div>
                            </div>
                        </div>
                    </section>';
			}
			?>
	</div>
</section>