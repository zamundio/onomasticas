@extends('layouts.admin')
@section('content')
@can('onomasticas_show')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <select class="form-control" multiple title="Linea" data-style="form-control" id="SelectJV" name="linea[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($ComboJV as $key => $value) {
                                    echo '<option data-tokens=' . $value["Linea"] . ' value=' . $value["Codigo"] . '>' . $value["Linea"] . '</option>';
                                }
                                ?>
            </select>
            <select class="form-control" multiple title="Mes Onomastica" data-style="form-control" id="SelectMeses" name="meses[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($ComboMeses as $key => $value) {
                                    echo '<option data-tokens=' . $value["Mes"] . ' value=' . $value["Id"] . '>' . $value["Mes"] . '</option>';
                                }
                                ?>
            </select>
            <select class="form-control" multiple title="Años en la Empresa" data-style="form-control" id="SelectAños" name="años[]" data-live-search=" true">
                <option data-tokens="*"> </option>
                <?php
                                foreach ($AñosEmp as $key => $value) {
                                    echo '<option data-tokens=' . $value["Años"] . ' value=' . $value["Id"] . '>' . $value["Años"] . '</option>';
                                }
                                ?>

            </select>
         <select class="form-control" multiple title="Mes Alta Empresa" data-style="form-control" id="SelectMesesEmp" name="mesesemp[]" data-live-search=" true">
             <option data-tokens="*"> </option>
             <?php
                                foreach ($ComboMeses as $key => $value) {
                                    echo '<option data-tokens=' . $value["Mes"] . ' value=' . $value["Id"] . '>' . $value["Mes"] . '</option>';
                                }
                                ?>
         </select>


        </div>


    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('global.onomasticas.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="onomasticas" class=" table table-bordered table-striped table-hover datatable display select">
                <thead>
                    <tr>
                        <th class="col-xs-1">
                            <input type="checkbox" class=" selectAll" value="1" id="example-select-all">
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Nombrejv') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.NombreGA') }}
                        </th>
                        <th>

                            {{-- {{ trans('global.onomasticas.fields.id') }} --}}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.ApellidosRep') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.NombreRep') }}
                        </th>
                        <th>
                            {{-- {{ trans('global.onomasticas.fields.Codigo_Linea') }} --}}
                        </th>
                        <th>
                               {{ trans('global.onomasticas.fields.Codigo_Linea') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.mail') }}
                        </th>
                         <th>
                             {{ trans('global.onomasticas.fields.dni') }}
                         </th>
                        <th>
                            {{ trans('global.onomasticas.fields.dir') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.pob') }}

                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.cp') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.prov') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.F_Alta') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.F_Nac') }}
                        </th>
                        <th>
                            E
                            {{-- {{ trans('global.onomasticas.fields.EDAD') }} --}}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.Movil') }}
                        </th>
                        <th>
                            {{ trans('global.onomasticas.fields.AÑOSEMP') }}
                        </th>
                        <th>
                            {{-- {{ trans('global.onomasticas.fields.CUMP') }} --}}
                            Ono
                        </th>
                         <th>
                             {{-- {{ trans('global.onomasticas.fields.CUMP') }} --}}
                             MesAlta
                         </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($onomasticas as $key => $onomastica)
                        <tr data-entry-id="{{ $onomastica->id }}">
                            <td>

                            </td>
                            <td>
                                {{ Illuminate\Support\Str::limit($onomastica->NombreJV,7) ?? '' }}
                            </td>
                            <td>
                                {{ Illuminate\Support\Str::limit($onomastica->NombreGA, 10) ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->id ?? '' }}
                            </td>
                            <td>

                                {{ $onomastica->ApellidosRep ?? '' }}



                            </td>
                            <td>

                                {{ $onomastica->NombreRep ?? '' }}



                            </td>
                            <td>
                                {{ $onomastica->Codigo_Linea ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->Linea ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->mail ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->DNI ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->Direccion ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->Poblacion ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->CP ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->Provincia ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->F_Alta ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->F_Nac ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->EDAD ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->Movil ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->AÑOSEMP ?? '' }}
                            </td>
                            <td>
                                {{ $onomastica->CUMP ?? '' }}
                            </td>
                             <td>
                                 {{ $onomastica->MESALTA ?? '' }}
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function () {


        $('#SelectJV').multiselect({
            nonSelectedText: 'Linea',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '100px'
        });
        $('#SelectMeses').multiselect({
            nonSelectedText: 'Mes Onomastica',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '200px'
        });
        $('#SelectAños').multiselect({
            nonSelectedText: 'Años Emp',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '150px'
        });
        $('#SelectMesesEmp').multiselect({
        nonSelectedText: 'Mes Alta  Emp',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '200px'
        });
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({
                    selected: true
                }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')

                    return
                }


            }
        }
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)




        var table = $('#onomasticas').DataTable({
            "pageLength":12,
            columnDefs: [{
                width: 50,
                targets: 1
            },

            {
            width: 60,
            targets: 2
            },
             {
             width: 120,
             targets: 4
             },
              {
              width: 90,
              targets: 5
              },
              {
              width: 0,
              targets: 6,
              visible:false
              },
               {
               width: 100,
               targets: 7
               },
            {
                width: 150,
                targets: 9,
				visible:true
            },
             {
             width: 120,
             targets: 10,
             visible:true
             },
             {
             width: 10,
             targets: 17,
             visible:true
             },
             {
             width: 10,
             targets: 18,
             visible:true
             },
               {
               width: 10,
               targets: 20,
               visible:false
               },
			{
                width: 60,
                targets: 12
            }].concat($.fn.dataTable.defaults.columnDefs),

            buttons: dtButtons,
            select: {
                style: 'multi+shift',
                selector: 'td:first-child'
            }
        });



        $(".selectAll").on("click", function (e) {
            if ($(this).is(":checked")) {
                table.rows().select();
            } else {
                table.rows().deselect();
            }
        });


        $("#onomasticas_filter.dataTables_filter").append($("#SelectJV"));

        $("#onomasticas_filter.dataTables_filter").append($("#SelectMeses"));
        $("#onomasticas_filter.dataTables_filter").append($("#SelectAños"));
         $("#onomasticas_filter.dataTables_filter").append($("#SelectMesesEmp"));

        $("#SelectJV").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectJV :selected').each(function () {
                groupNameFilterApplied.push($(this).val());

            });



  console.log(groupNameFilterApplied.join('|'));

            $('#onomasticas').DataTable().column(6).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
        $("#SelectMeses").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectMeses :selected').each(function () {
                // groupNameFilterApplied.push("/" + $(this).val() + "/");
                   groupNameFilterApplied.push("^" + $(this).val() + "$");
            });



            console.log(groupNameFilterApplied.join('|'));

            $('#onomasticas').DataTable().column(19).search(groupNameFilterApplied.join('|'), true, false, true).draw();
  console.log($('#onomasticas').DataTable().column(1).header().textContent);



        });
        $("#SelectAños").on('change', function () {


            var groupNameFilterApplied = [];
            $('#SelectAños :selected').each(function () {
                groupNameFilterApplied.push("^" + $(this).val() + "$");
            });


            console.log(groupNameFilterApplied.join('|'));

            $('#onomasticas').DataTable().column(18).search(groupNameFilterApplied.join('|'), true, false, true).draw();


        });
          $("#SelectMesesEmp").on('change', function () {


          var groupNameFilterApplied = [];
          $('#SelectMesesEmp :selected').each(function () {
        //   groupNameFilterApplied.push("/" + $(this).val() + "/");
             groupNameFilterApplied.push("^" + $(this).val() + "$");
          });


 console.log($('#onomasticas').DataTable().column(20).header().textContent);
          console.log(groupNameFilterApplied.join('|'));

          $('#onomasticas').DataTable().column(20).search(groupNameFilterApplied.join('|'), true, false, true).draw();


          });
    });

</script>
@endsection
