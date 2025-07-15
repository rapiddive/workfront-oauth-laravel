<?php

namespace App\Http\Controllers;

use App\Services\WorkfrontService;
use Illuminate\Http\Request;

class WorkfrontFormController extends Controller
{
    public function showForm(WorkfrontService $workfront)
    {
//        $queueId = config('services.workfront.queue_id', '681b3bd40014e4bc60b5313496d2bdec');
        $queueId = env('QUEUE_TOPIC_ID', '68765a41000578b2f474331a7800d77b');
        $formMeta = $workfront->getCustomForms($queueId);
        $forms = [];
        foreach ($formMeta['data']['objectCategories'] ?? [] as $form) {
//            dump($form);
            $categoryId = $form['categoryID'];
            $fields = $workfront->getCategoryFields($categoryId);
            $_catFields = [];
            foreach ($fields['data']['categoryParameters'] as $catPam) {
                $catField = $workfront->getCategoryParam($catPam['parameterID']);
                $_catFields[$catPam['parameterID']]['label'] = $catField['data']['name'];
                $_catFields[$catPam['parameterID']]['name'] = $catField['data']['name'];
                $_catFields[$catPam['parameterID']]['displayType'] = $catField['data']['displayType'];
                if ($catField['data']['displayType'] == 'CHCK') {
                    $_catFields[$catPam['parameterID']]['options'] = $catField['data']['parameterOptions'];
                } elseif ($catField['data']['displayType'] == 'SLCT') {
                    $_catFields[$catPam['parameterID']]['options'] = $catField['data']['parameterOptions'];
                    $_catFields[$catPam['parameterID']]['displayType'] = 'select';
                } elseif ($catField['data']['displayType'] == 'MULT') {
                    $_catFields[$catPam['parameterID']]['options'] = $catField['data']['parameterOptions'];
                } elseif ($catField['data']['displayType'] == 'DATE') {
                    $_catFields[$catPam['parameterID']]['options'] = [];
                } elseif ($catField['data']['displayType'] == 'TEXT') {
                    $_catFields[$catPam['parameterID']]['options'] = [];
                } elseif ($catField['data']['displayType'] == 'NUMBER') {
                    $_catFields[$catPam['parameterID']]['options'] = [];
                }
            }
            $forms[$form['categoryOrder']] = [
                'id' => $categoryId,
                'name' => $fields['data']['name'],
                'fields' => $_catFields ?? [],
            ];
        }
        ksort($forms);
        return view('request-form', compact('forms'));
    }

    public function submitForm(Request $request, WorkfrontService $workfront)
    {
        $data = $request->all();
        $queueId = config('services.workfront.queue_id');

        $payload = [
            'projectID' => env('PROJECT_ID'),
            'name' => $data['name'],
            'description' => $data['description'],
            'queueTopicID' => env('QUEUE_TOPIC_ID'),
            // + dynamic fields like DE:fieldName => value
        ];

        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'DE:')) {
                $key = str_replace('_', ' ', $key);
                $payload[$key] = $value;
            }
        }
        dump($payload);
        $result = $workfront->createIssue($payload);
        dd($result);
//        session(['success' => $result->data['ID']]);
        return redirect()->back()->with('status', 'Submitted!');
    }
}
