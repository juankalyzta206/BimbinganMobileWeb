
        <footer class="page-footer blue darken-2 white-text center">
          <div class="footer-copyright">
            <div class="container center">
              &copy; 2019 Copyright By Me
            </div>
          </div>
        </footer>

        <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

        <script>
            const sideNav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sideNav);

            const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox, {
                inDuration : 500,
                outDuration	: 500
            });

            const modal = document.querySelectorAll('.modal');
            M.Modal.init(modal);

            const datePicker =  document.querySelectorAll('.datepicker');
            M.Datepicker.init(datePicker, {
                selectMonths: true,
                selectYears: 15,
                 format: 'yyyy-mm-dd'
            } 
            );
          
            const timePicker =  document.querySelectorAll('.timepicker');
            M.Timepicker.init(timePicker,{
                twelveHour: false
            });

            $('#isi_berita').val('New Text');
            M.textareaAutoResize($('#isi_berita'));
            
            const select = document.querySelectorAll('#select');
              M.FormSelect.init(select);

        </script>
    </body>
</html>