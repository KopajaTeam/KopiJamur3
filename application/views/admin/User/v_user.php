<?php $this->load->view("admin/side/header") ?>
<?php $this->load->view("admin/side/sidebar") ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">account_circle</i>
            </div>
            <h4 class="card-title">Data User</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!-- <a href="<?php echo base_url('User/tambah_user') ?>" class="btn btn-success">Tambah</a> -->
            </div>
            <div class="material-datatables">

              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Date</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
<!--                       <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th class="text-right">Actions</th>
                          </tr>
                        </tfoot> -->
                        <tbody>
                          <tr>
                            <th>1</th>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td class="text-right">
                              <a href="<?php echo base_url('User/edit_user') ?>" class="btn btn-simple btn-warning btn-icon"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>2</th>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>3</th>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>4</th>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>5</th>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>6</th>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>7</th>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>8</th>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>9</th>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>10</th>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>11</th>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>12</th>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>13</th>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>14</th>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>15</th>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>16</th>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>17</th>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>18</th>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>19</th>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>20</th>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>21</th>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>22</th>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>23</th>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>24</th>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>25</th>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>26</th>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>27</th>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>28</th>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>29</th>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>30</th>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>31</th>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>32</th>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>33</th>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>34</th>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>35</th>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>36</th>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>37</th>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>38</th>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>39</th>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                          <tr>
                            <th>40</th>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">edit</i></a>
                              <a href="#" class="btn btn-simple btn-danger btn-icon edit"><i class="material-icons">close</i></a>
                              <a href="#" class="btn btn-simple btn-info btn-icon remove"><i class="material-icons">visibility</i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!-- end content-->
                </div><!--  end card  -->
              </div> <!-- end col-md-12 -->
            </div> <!-- end row -->
          </div>
        </div>

<?php $this->load->view("admin/side/footer") ?>
<?php $this->load->view("admin/side/js") ?>
<script type="text/javascript">
$(document).ready(function() {
  $('#datatables').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    responsive: true,
    language: {
    search: "_INPUT_",
    searchPlaceholder: "Search records",
    }

  });


  var table = $('#datatables').DataTable();

  // Edit record
  table.on( 'click', '.edit', function () {
    $tr = $(this).closest('tr');

    var data = table.row($tr).data();
    alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
  } );

  // Delete a record
  table.on( 'click', '.remove', function (e) {
    $tr = $(this).closest('tr');
    table.row($tr).remove().draw();
    e.preventDefault();
  } );

  //Like record
  table.on( 'click', '.like', function () {
    alert('You clicked on Like button');
  });

  $('.card .material-datatables label').addClass('form-group');
});

</script>