<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use App\Models\Survey;


class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = Survey::create(
            [
                'name' => 'Demographics',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '1. What is the size of your company?',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'Turnover RM < 300,000 or < 5 employees',
                    'Turnover RM 300,000 - 15Mil, or 5 - 75 employees',
                    'Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '2. Is your company a single or multiple company supplier?',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'Single',
                    'Multiple',
                    'Other',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '3. Over the past year, has your company allocated resources to sustainability?',
                'type' => 'checkbox',
                'rules' => ['required'],
                'options' => [
                    'Environmental',
                    'Social/Societal',
                    'Governance',
                    'None',
                ],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '4. Over the past year, has your company set sustainability targets?',
                'type' => 'checkbox',
                'rules' => ['required'],
                'options' => [
                    'Environmental',
                    'Social/Societal',
                    'Governance',
                    'None',
                ],
            ]
        );

        // Q5
        $survey->questions()->create(
            [
                'content' => '5. Does your company have any ISO or other quality standard related to Environment, Social or Governance?',
                'type' => 'checkbox',
                'rules' => ['required'],
                'options' => [
                    'ISO 14001:2015 Environmental management systems',
                    'ISO 14006:2020 Environmental management systems - Guidelines for incorporating ecodesign',
                    'ISO 14046:2014 Environmental management - Water footprint - Principles requirements and guidelines based on Lifecycle Assessment',
                    'ISO 30415:2021 Human resource management - Diversity and inclusion',
                    'ISO 37001:2016 Anti-bribery management systems',
                    'Science Based Targets initiative (SBTi)',
                    'None',
                    'Other',
                ],
            ]
        );

        $survey = Survey::create(
            [
                'name' => 'Environment-Operations-Water_Consumption',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '6. Over the past year, my company has minimized or reduced water consumption.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '7. My company has a guideline, process, or policy to minimize or reduce water consumption in its operations.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '8. My company adopts technologies to minimize or reduce water consumption (e.g. water recycling, rainwater harvesting).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '9. My company engages with internal and external stakeholders to address issues and to implement best practices on water consumption.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '10. My company has a structured approach to collect, monitor, and report data on water management and uses that data to meet quality standards.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q1-2
        $survey = Survey::create(
            [
                'name' => 'Environment-Operations-Environmental_Management',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '11. Over the past year, my company has minimized or reduced its environmental impact. (e.g., reduction of paper, plastics, carbon emissions, conserve natural habitat).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '12. My company has a guideline, process, or policy to be eco-efficient in its operations and minimize its environmental impact.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '13. My company provides financial/non-financial resources for activities related to environmental management.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '14. My company engages with internal and external stakeholders to find solutions that issues environmental issues (e.g., deforestation).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '15. My company has a structured approach to collect, monitor, and report data on environmental management to meet quality standards.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q1-3
        $survey = Survey::create(
            [
                'name' => 'Environment-Stakeholders-Ecosystems_Approach',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '16. Over the past year, my company has minimized or reducted its effect on the ecosystem in which it operates.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '17. My company has a guideline, process or policy to adopt nature-based solutions or to manage biodiversity and ecosystems.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '18. My company uses engineering or technology to integrate nature-based solutions in our business model.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '19. My company engages with internal and external stakeholders to address issues and to implement best practices on promoting biodiversity and maintaining the ecosystem.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '20. My company has a structured approach to collect, monitor, and report data on eco-design and nature-based solutions, and uses that data to meet quality standards.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q1-4
        $survey = Survey::create(
            [
                'name' => 'Environment-Operations-Carbon_Footprint-GHG_Emissions',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '21. Over the past year, my company has minimized or reduced its carbon footprint.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '22. My company uses renewable energy or technologies to minimize or reduce its carbon footprint/GHG emissions.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '23. My company has a guideline, process, or policy to minimize or reduce its carbon footprint/GHG emissions from our direct operations (scope 1 and 2).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '24. My company engages with external stakeholders to address issues on GHG emissions and has set GHG reduction targets from its support operations (scope 3).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '25. My company has a structured approach to collect, monitor, and report data on GHG emissions and has set ambititous GHG reduction goals.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q2
        $survey = Survey::create(
            [
                'name' => 'Social-Human_Capital-Inclusivity',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '26. Over the past year, my company has addressed issues on discriminatory hiring practices.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '27. My company has a guideline, process, or policy (in accordance with Malaysian legislation) that prevents employees from being treated less favourably than others due to their race, colour, sex, religion, political opinion, place of birth, social class, culture, age, disability, or family responsibilities.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '28. My company takes affirmative action (e.g. outreach and training programs) to recruit minorities (such as disabled persons/OKU, ethnic minorities, and others).',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '29. My company engages with internal and external stakeholders to address issues on non-discrimination and inclusivity in the workplace and to promote best practices.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '30. My company has a structured approach to collect, monitor, and report data on discrimination and inclusivity, and uses that data to meet quality standards.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q2-2
        $survey = Survey::create(
            [
                'name' => 'Social-Human_Capital-Wages',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '31. Over the past year, my company had a minimum wage policy.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '32. My company determines and pays wages according to market rates.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '33. My company reviews wage payments periodically to ensure they are aligned with market rates and adjusted for inflation.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '34. My company adopts a living wage framework.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '35. My company has a structured approach to collect, monitor and report data on wages/salaries, and uses that data to balance the wage ratio between top level management and all its other employees.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q3
        $survey = Survey::create(
            [
                'name' => 'Governance-Governance-Anti_Corruption_Policies',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '36. Over the past year, my company has addressed corruption issues.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '37. My company has a guideline, process, or policy (in accordance to Malaysian legislation) that seeks to detect and respond to bribery, extortion and other forms of corruption.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '38. My company leverages on technology to proactively prevent, detect and respond to bribery, extortion.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '39. My company engages with internal and external stakeholders to address the main risks from bribery, extortion and other forms of corruption, and to implement best practices.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '40. My company has a structured approach to collect, monitor and report data, internally and externally, on corruption related issues and uses that data to meet quality standards.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        // Q3-2
        $survey = Survey::create(
            [
                'name' => 'Governance-Strategy-Climate_Action',
                'settings' => ['limit-per-participant' => -1],
            ]
        );

        $survey->questions()->create(
            [
                'content' => '41. Over the past year, my company has addressed business issues related to climate change.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '42. My company has a guideline, process, or policy to address climate change.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '43. My company uses technology to capture and quantify relevant data on the potential risks posed by climate change on our business.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '44. My company engages with internal and external stakeholders to address business issues on climate change and has set carbon reduction targets.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );

        $survey->questions()->create(
            [
                'content' => '45. My company is committed to Net-zero carbon and systematically collects, monitors, and reports data to ensure its GHG reduction goals are met in line with international standards and frameworks.',
                'type' => 'radio',
                'rules' => ['required'],
                'options' => [
                    'True',
                    'False',
                ],
            ],
        );
    }
}
