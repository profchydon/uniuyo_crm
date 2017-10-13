
@extends('layouts.master')


@section('content')

<div class="wrapper">

@include('layouts.sidebar')

<div class="main-panel">

@include('layouts.nav')
<div class="content">
  <div class="container-fluid">
      <div class="card">

          <div class="card-header" data-background-color="purple">
              <h4 class="faq-title text-center">Frequently Asked Questions</h4>
          </div>

          <div class="card-content">
              <div class="row">

                  <div class="col-md-6">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q: How can i check my semester results?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Answer:  <br> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Q: University Transfer
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <strong> INTER-UNIVERSITY TRANSFER</strong><br>
                                A student transferring from another University to the University of
                                Uyo shall apply for admission into the Faculty/Department of
                                his/her choice stating reasons for the transfer and performance in
                                his/her former University. He/she must meet the UME
                                requirement of the Department/Faculty and must earn a
                                cumulating grade point average of at least 3.00 on a 5.00 point
                                grading system. Post Pre-degree students may not be qualified for
                                transfer.<br>
                                <h1></h1>
                                Candidates may only transfer to do the same course as in the
                                former University and may not be allowed to change course.
                                Candidates must also pay recommended transfer fee to the
                                University and shall be issued with transfer form by the Admission
                                Officer. They should request their transcript to be forwarded to the
                                University early enough.<br>
                                No student rusticated or expelled from the former University shall
                                be accepted in the University of Uyo, and students on transfer must
                                spend at least two academic years on a four-year programme and
                                three years on a five-year programme in the University of Uyo
                                before graduation.<br>The following are detailed rules and regulations governing inter-
                                University transfer: <br>
                                (i) Candidates should have a minimum UTME score of 200.<br>
                                (ii) Candidates must meet the initial entry requirements of the
                                University of Uyo and the requirements of the Department
                                into which transfer is sought. .<br>
                                (iii) Candidates must be in good standing in the former
                                Universities, that is, must not have been rusticated,
                                expelled or asked to withdraw from the former Universities
                                and must have spent at least an academic session in the
                                former Universities. This should be affirmed in a genuine
                                document signed by accredited authorities of the former
                                Universities. .<br>
                                (iv) Candidates must not be admitted on transfer beyond Year
                                II for a 4-year programme or year III for a 5-year
                                programme. .<br>
                                (v) Candidates must have earned a minimum cumulative grade
                                point average (CUM GPA) 3.00 on a 5.00 point grading
                                system or 2.50 on a 4.00 point grading system. .<br>
                                (Vi) It shall be the responsibility of the candidate seeking
                                transfer to cause his transcript to be submitted to the
                                University for purpose of admission. Courses offered and
                                passed in the former Universities should be waived by the
                                University. Transfer shall not normally be considered until
                                the University has received the transcript and approval of
                                the transfer given by the Senate. .<br>
                                (vii) Candidates may only transfer into the same academic
                                programme as in the former University and may not be
                                allowed to change programmes. .<br>
                                (viii) Candidates must pay an approved non-refundable
                                application fee and shall be issued with a transfer form
                                obtainable from the Admissions Office. .<br>
                                (ix) All applications for transfer and the relevant transcript of
                                work in the former University must be received by the
                                Registrar, University of Uyo not later than 2 months
                                preceding the commencement of the academic year in
                                which admission is sought. .<br>
                                (x) Not more than one per cent (1%) of the admission quota of
                                the year in each Faculty should betaken by Inter-University
                                transfers. .<br>
                                (xi) There shall normally be no Inter-University transfer into the
                                Faculties of Law and Medicine. <br>
                                <h1></h1>
                                <strong> INTRA-UNIVERSITY TRANSFER </strong><br>
                                Students of the University of Uyo seeking transfer from one
                                Department to the other or from one Faculty to the other must
                                meet the UTME requirements of the new Faculty/Department and
                                must have earned a cumulative grade point average of at least
                                3.00. Students asked to withdraw from one Department on
                                grounds of academic deficiency may be accepted irrespective of
                                their average cumulative grade point. Students on transfer must
                                also pay an approved fee to the University and obtain change of
                                course form.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Duration of Programmes & Conditions For Graduation
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <strong>DURATION OF PROGRAMMES</strong><br>
                                The academic year of the University is divided into two semesters. Each semester is normally made up of 15 weeks of actual teaching and two weeks of examinations.<br>
                                <strong>Duration of Programmes for UTME and Direct Entry</strong><br>
                                Degree programmes in the University last between 3 and 6 years depending on the programme and the mode of entry. Faculties of Agriculture, Engineering, Environmental Studies and Law and some programmes in the Faculty of Sciences like Computer Science run five-year programmes for candidates admitted through the Unified Tertiary Matriculation Examination (UTME). <br>
                                The B.Se. Computer Science in the Faculty of Sciences also lasts for five years. Bachelor of Architecture lasts for 6 years, four of which are for the B.Sc. and two for M.Sc. Direct Entry candidates come into second year of the degree programmes. Students are normally allowed to remain for a maximum of two additional years for a four year programme and two and a halfvears (two years one semester for a five year proqrernme if they are not able to' complete their degree programmes with the minimum duration). <br>
                                <strong>Duration of Programmes For Continuing Education</strong><br>
                                a. Sub-Degree Programmes (Certificate&amp; Diploma) <br>
                                (i) 1 year for full-time Certificate Programme <br>
                                (ii) 2 years for part-time Certificate Programme <br>
                                (iii) 2 years for full-time Diploma Programme <br>
                                (iv) 3 years for part-time Diploma programmes <br>
                                <strong>a. First Degree Programmes: </strong><br>
                                (i) 4 years for a programme that requires 3 years on a regular basis. <br>
                                (ii) 5 years for a programme that requires 4 years on a regular basis. <br>
                                (iii) 6 years for a programme that requires 5 years on a regular basis. <br>
                                <strong>b. Postgraduate Programmes </strong><br>
                                (i) 1Y2 years for a programme that requires 1 year on a regular basis. <br>
                                (ii) 3 years for a programme that requires 2 year on a regular basis. <br>
                                (ill) 4 years for a programme that requires 3 year on a regular basis. <br>
                                Failure to complete the programme at the required period attracts withdrawal of the affected students from the University. <br>
                                <strong>CONDITIONS FORGRADUATION </strong><br>
                                The final award and the class of the degree shall be based on the Cumulative Grade Point Average (CGPA) obtained by each candidate in all prescribed courses approved by the University. <br> The final Cumulative Grade Point Average shall be calculated on
                                the basis of the total number of all the course units registered for
                                during the course of the student's programme.<br>
                                Degree shall be awarded as follows:<br>
                                First Class  -  4.50 - 5.00 <br>
                                Second Class (Upper Div.) -    3.50 -  4.49 <br>
                                Second Class (Lower Div.) -   2.40 - 3.49 <br>
                                Third Class - 1.50  - 2.39 <br>
                                Pass - 1.00 - 1.49

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q: How can i check my semester results?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Answer:  <br> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Q: University Transfer
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <strong> INTER-UNIVERSITY TRANSFER</strong><br>
                                A student transferring from another University to the University of
                                Uyo shall apply for admission into the Faculty/Department of
                                his/her choice stating reasons for the transfer and performance in
                                his/her former University. He/she must meet the UME
                                requirement of the Department/Faculty and must earn a
                                cumulating grade point average of at least 3.00 on a 5.00 point
                                grading system. Post Pre-degree students may not be qualified for
                                transfer.<br>
                                <h1></h1>
                                Candidates may only transfer to do the same course as in the
                                former University and may not be allowed to change course.
                                Candidates must also pay recommended transfer fee to the
                                University and shall be issued with transfer form by the Admission
                                Officer. They should request their transcript to be forwarded to the
                                University early enough.<br>
                                No student rusticated or expelled from the former University shall
                                be accepted in the University of Uyo, and students on transfer must
                                spend at least two academic years on a four-year programme and
                                three years on a five-year programme in the University of Uyo
                                before graduation.<br>The following are detailed rules and regulations governing inter-
                                University transfer: <br>
                                (i) Candidates should have a minimum UTME score of 200.<br>
                                (ii) Candidates must meet the initial entry requirements of the
                                University of Uyo and the requirements of the Department
                                into which transfer is sought. .<br>
                                (iii) Candidates must be in good standing in the former
                                Universities, that is, must not have been rusticated,
                                expelled or asked to withdraw from the former Universities
                                and must have spent at least an academic session in the
                                former Universities. This should be affirmed in a genuine
                                document signed by accredited authorities of the former
                                Universities. .<br>
                                (iv) Candidates must not be admitted on transfer beyond Year
                                II for a 4-year programme or year III for a 5-year
                                programme. .<br>
                                (v) Candidates must have earned a minimum cumulative grade
                                point average (CUM GPA) 3.00 on a 5.00 point grading
                                system or 2.50 on a 4.00 point grading system. .<br>
                                (Vi) It shall be the responsibility of the candidate seeking
                                transfer to cause his transcript to be submitted to the
                                University for purpose of admission. Courses offered and
                                passed in the former Universities should be waived by the
                                University. Transfer shall not normally be considered until
                                the University has received the transcript and approval of
                                the transfer given by the Senate. .<br>
                                (vii) Candidates may only transfer into the same academic
                                programme as in the former University and may not be
                                allowed to change programmes. .<br>
                                (viii) Candidates must pay an approved non-refundable
                                application fee and shall be issued with a transfer form
                                obtainable from the Admissions Office. .<br>
                                (ix) All applications for transfer and the relevant transcript of
                                work in the former University must be received by the
                                Registrar, University of Uyo not later than 2 months
                                preceding the commencement of the academic year in
                                which admission is sought. .<br>
                                (x) Not more than one per cent (1%) of the admission quota of
                                the year in each Faculty should betaken by Inter-University
                                transfers. .<br>
                                (xi) There shall normally be no Inter-University transfer into the
                                Faculties of Law and Medicine. <br>
                                <h1></h1>
                                <strong> INTRA-UNIVERSITY TRANSFER </strong><br>
                                Students of the University of Uyo seeking transfer from one
                                Department to the other or from one Faculty to the other must
                                meet the UTME requirements of the new Faculty/Department and
                                must have earned a cumulative grade point average of at least
                                3.00. Students asked to withdraw from one Department on
                                grounds of academic deficiency may be accepted irrespective of
                                their average cumulative grade point. Students on transfer must
                                also pay an approved fee to the University and obtain change of
                                course form.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Duration of Programmes & Conditions For Graduation
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <strong>DURATION OF PROGRAMMES</strong><br>
                                The academic year of the University is divided into two semesters. Each semester is normally made up of 15 weeks of actual teaching and two weeks of examinations.<br>
                                <strong>Duration of Programmes for UTME and Direct Entry</strong><br>
                                Degree programmes in the University last between 3 and 6 years depending on the programme and the mode of entry. Faculties of Agriculture, Engineering, Environmental Studies and Law and some programmes in the Faculty of Sciences like Computer Science run five-year programmes for candidates admitted through the Unified Tertiary Matriculation Examination (UTME). <br>
                                The B.Se. Computer Science in the Faculty of Sciences also lasts for five years. Bachelor of Architecture lasts for 6 years, four of which are for the B.Sc. and two for M.Sc. Direct Entry candidates come into second year of the degree programmes. Students are normally allowed to remain for a maximum of two additional years for a four year programme and two and a halfvears (two years one semester for a five year proqrernme if they are not able to' complete their degree programmes with the minimum duration). <br>
                                <strong>Duration of Programmes For Continuing Education</strong><br>
                                a. Sub-Degree Programmes (Certificate&amp; Diploma) <br>
                                (i) 1 year for full-time Certificate Programme <br>
                                (ii) 2 years for part-time Certificate Programme <br>
                                (iii) 2 years for full-time Diploma Programme <br>
                                (iv) 3 years for part-time Diploma programmes <br>
                                <strong>a. First Degree Programmes: </strong><br>
                                (i) 4 years for a programme that requires 3 years on a regular basis. <br>
                                (ii) 5 years for a programme that requires 4 years on a regular basis. <br>
                                (iii) 6 years for a programme that requires 5 years on a regular basis. <br>
                                <strong>b. Postgraduate Programmes </strong><br>
                                (i) 1Y2 years for a programme that requires 1 year on a regular basis. <br>
                                (ii) 3 years for a programme that requires 2 year on a regular basis. <br>
                                (ill) 4 years for a programme that requires 3 year on a regular basis. <br>
                                Failure to complete the programme at the required period attracts withdrawal of the affected students from the University. <br>
                                <strong>CONDITIONS FORGRADUATION </strong><br>
                                The final award and the class of the degree shall be based on the Cumulative Grade Point Average (CGPA) obtained by each candidate in all prescribed courses approved by the University. <br> The final Cumulative Grade Point Average shall be calculated on
                                the basis of the total number of all the course units registered for
                                during the course of the student's programme.<br>
                                Degree shall be awarded as follows:<br>
                                First Class  -  4.50 - 5.00 <br>
                                Second Class (Upper Div.) -    3.50 -  4.49 <br>
                                Second Class (Lower Div.) -   2.40 - 3.49 <br>
                                Third Class - 1.50  - 2.39 <br>
                                Pass - 1.00 - 1.49

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>

@endsection
