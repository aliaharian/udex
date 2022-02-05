<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;
use App\Model\DesignOptions;
use Illuminate\Http\Request;

class DesignOptionsController extends Controller {
    public function __construct() {
        $this->middleware('can:isAdmin')->except([
            'options',
            'options_update',
        ]);
    }

    public function options() {
        $DesignOption = DesignOptions::where('id', '!=', null)->first();
        return view('admin.design.options', compact('DesignOption'));
    }

    public function options_update(Request $request) {
        $DesignOptionsRequest = $request->all();
        $DesignOption = DesignOptions::where('id', '!=', null)->first();

        /* Type of design */
        $DesignOptionsType = $DesignOptionsRequest['DesignOptionType'] . '_meta';

        /* Design option Data */
        $DesignOptionsMeta = [
            'OnSiteMeasuredSurvey' => json_encode(end($DesignOptionsRequest['OnSiteMeasuredSurvey'])),
            'ExistingDrawings' => json_encode(end($DesignOptionsRequest['ExistingDrawings'])),
            'ProposedDesign' => json_encode(end($DesignOptionsRequest['ProposedDesign'])),
            'PlanningSupport' => json_encode(end($DesignOptionsRequest['PlanningSupport'])),
            'BuildingRegulations' => json_encode(end($DesignOptionsRequest['BuildingRegulations'])),
        ];


        $DesignOptionData[$DesignOptionsType] = json_encode($DesignOptionsMeta);

        /* Update Design Options */
        if ($DesignOption->update($DesignOptionData)) {
            return back()->with('notification', [
                'class' => 'success',
                'message' => 'Data successfully recorded.'
            ]);
        }
    }

    /* Design Excel Upload */

    public function DesignExcelUpdate(Request $request) {
        $file = $_FILES["tmp_name"]["tmp_name"];
        $file_open = fopen($file, "r");

        $ExcelRows = [];
        $num = -1;
        while (($line = fgetcsv($file_open)) !== FALSE) {
            $num += 1;
            array_push($ExcelRows, $line);
        }
        fclose($file_open);

        $OnSiteMeasuredSurvey = [];
        for ($row = 1; $row <= $num; $row++) {
            if ($ExcelRows[$row][0] == 'Detached') {
                $OnSiteMeasuredSurvey['detached']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['detached']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['detached']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['detached']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['detached']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            } elseif ($ExcelRows[$row][0] == 'Semi Detached') {
                $OnSiteMeasuredSurvey['semi_detached']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['semi_detached']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['semi_detached']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['semi_detached']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['semi_detached']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            } elseif ($ExcelRows[$row][0] == 'End Of Terrace') {
                $OnSiteMeasuredSurvey['end_of_terrace']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['end_of_terrace']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['end_of_terrace']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['end_of_terrace']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['end_of_terrace']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            } elseif ($ExcelRows[$row][0] == 'Terrace') {
                $OnSiteMeasuredSurvey['terrace']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['terrace']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['terrace']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['terrace']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['terrace']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            } elseif ($ExcelRows[$row][0] == 'Flat') {
                $OnSiteMeasuredSurvey['flat']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['flat']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['flat']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['flat']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['flat']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            } elseif ($ExcelRows[$row][0] == 'Bungalow') {
                $OnSiteMeasuredSurvey['bungalow']['OnSiteMeasuredSurvey'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][7]);
                $OnSiteMeasuredSurvey['bungalow']['ExistingDrawings'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][8]);
                $OnSiteMeasuredSurvey['bungalow']['ProposedDesign'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][9]);
                $OnSiteMeasuredSurvey['bungalow']['PlanningSupport'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = str_replace(',', '', $ExcelRows[$row][10]);
                $OnSiteMeasuredSurvey['bungalow']['BuildingRegulations'][str_replace(' ', '_', strtolower($ExcelRows[$row][1] . '_' . $ExcelRows[$row][2]))] = is_numeric(str_replace(',', '', $ExcelRows[$row][11])) ? 1 : 0 ? str_replace(',', '', $ExcelRows[$row][11]) : 0;
            }
        }


        $DesignOption = DesignOptions::where('id', '!=', null)->first();

        foreach ($OnSiteMeasuredSurvey as $key => $item) {
            $DesignOptionMeta = [
                'OnSiteMeasuredSurvey' => json_encode($OnSiteMeasuredSurvey[$key]['OnSiteMeasuredSurvey']),
                'ExistingDrawings' => json_encode($OnSiteMeasuredSurvey[$key]['ExistingDrawings']),
                'ProposedDesign' => json_encode($OnSiteMeasuredSurvey[$key]['ProposedDesign']),
                'PlanningSupport' => json_encode($OnSiteMeasuredSurvey[$key]['PlanningSupport']),
                'BuildingRegulations' => json_encode($OnSiteMeasuredSurvey[$key]['BuildingRegulations']),
            ];
            $DesignOptionData[$key . '_meta'] = json_encode($DesignOptionMeta);

            $DesignOption->update($DesignOptionData);
        }

        return back()->with('notification', [
            'class' => 'success',
            'message' => 'Data successfully imported.'
        ]);
    }
}
