<div class="flex-grow">
    <div class="flex justify-center">
        <div class="max-w-8xl w-full">
            <div
                class="m-5 p-2 px-5 sm:px-10 md:px-20 2xl:px-40 rounded-lg overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                    <div class="col-span-1 p-3">
                        <div class="flex gap-2 items-center">
                            <hr class="bg-primary bg-opacity-50 w-16 h-1 border-0" />
                            <h4 class="font-seimbold text-gray-700">Career</h4>
                            <hr class="bg-primary bg-opacity-50 w-16 h-1 border-0" />
                        </div>
                        <h1 class="mt-5 font-bold text-primary"> Account and Admin Officer</h1>

                        <div class="mt-2 mb-10">
                            <div class="flex gap-2">
                                <span>No. of Vacancies:</span><span>1</span>
                            </div>
                            <div class="flex gap-2">
                                <span>Posted date : </span><span>Sept. 3, 2024</span>
                            </div>
                        </div>

                        <!-- requiremernts section  -->
                        <div>
                            <div class="flex items-center gap-3">
                                <h3 class="font-medium">Requirements</h3>
                                <hr class="bg-primary w-16 h-1 border-0" />
                            </div>
                            <div class="mt-2">
                                <ul
                                    id="requirements-list"
                                    class="list-none list-inside flex flex-col gap-3 text-justify">
                                    <script>
                                        const requirements = [
                                            "Bachelor's degree in Accounting, Finance, Business Administration, or a related field",
                                            "Proven experience in accounting or administrative roles, preferably in a healthcare or lab setting",
                                            "Strong knowledge of accounting principles and financial reporting",
                                            "Proficiency in accounting software (e.g., QuickBooks, SAP) and MS Office applications",
                                            "Experience with payroll processing and financial audits",
                                            "Excellent organizational and time management skills",
                                            "Strong communication skills for interacting with staff, clients, and vendors",
                                            "Ability to handle confidential information with discretion and integrity",
                                            "Knowledge of healthcare or lab-related compliance standards is a plus",
                                            "Attention to detail and accuracy in financial and administrative tasks",
                                            "Problem-solving skills and ability to work under pressure in a fast-paced environment",
                                            "Familiarity with inventory management and vendor coordination",
                                            "Understanding of local labor laws, tax regulations, and compliance requirements"
                                        ];


                                        const requirementContent = requirements
                                            .map(
                                                (item, index) => `
                      <li class="font-sans flex items-center gap-2">
                      <ion-icon name="checkbox" class="text-primary shrink-0"></ion-icon>
                      <h4 class="font-normal text-gray-700">
                        
                        ${item}
                      </h4>
                    </li>
                      `
                                            )
                                            .join("");

                                        document.getElementById(
                                            "requirements-list"
                                        ).innerHTML = requirementContent;
                                    </script>
                                </ul>
                            </div>
                        </div>

                        <!-- responsibilities section  -->
                        <div class="mt-10">
                            <div class="flex items-center gap-3">
                                <h3 class="font-medium">Responsibilities</h3>
                                <hr class="bg-primary w-16 h-1 border-0" />
                            </div>
                            <div class="mt-2">
                                <ul
                                    id="responsibilities-list"
                                    class="list-none list-inside flex flex-col gap-3 text-justify">
                                    <script>
                                        const responsibilities = [
                                            "Manage financial records including income, expenses, and budgets",
                                            "Prepare and send invoices, follow up on payments, and ensure proper transaction recording",
                                            "Process payroll, including employee salaries, deductions, and taxes",
                                            "Assist in preparing annual budgets and monitor financial performance",
                                            "Generate financial reports such as balance sheets, profit and loss statements, and cash flow reports",
                                            "Prepare for internal and external audits to ensure compliance with financial regulations",
                                            "Oversee day-to-day administrative tasks such as organizing meetings and managing office supplies",
                                            "Maintain company records including employee files and lab certifications",
                                            "Ensure compliance with health, safety, and regulatory standards",
                                            "Assist with recruitment, onboarding, and management of employee records",
                                            "Track and maintain inventory of laboratory supplies and coordinate with suppliers",
                                            "Ensure compliance with medical and diagnostic standards in financial and administrative operations",
                                            "Safeguard confidentiality of patient records and ensure data protection compliance",
                                            "Support medical teams with scheduling, resource allocation, and external communication"
                                        ];


                                        const responsibilitiesContent = responsibilities
                                            .map(
                                                (item, index) => `
                      <li class="font-sans flex items-center gap-2">
                      <ion-icon name="checkbox" class="text-primary shrink-0"></ion-icon>
                      <h4 class="font-normal text-gray-700">
                        
                        ${item}
                      </h4>
                    </li>
                      `
                                            )
                                            .join("");

                                        document.getElementById(
                                            "responsibilities-list"
                                        ).innerHTML = responsibilitiesContent;
                                    </script>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 p-3">
                        <div class="rounded-lg px-0 md:px-5 lg:px-10 2xl:px-20">
                            <h2 class="text-primary">Apply for this job</h2>
                            <div class="mt-5">
                                <form action="" class="p-5">
                                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5 gap-y-2 gap-5">
                                        <input
                                            type="text"
                                            class="form-input text-base rounded-md border-2 border-solid border-neutral-200 focus:outline-none"
                                            placeholder="Full Name*" />
                                        <input
                                            type="text"
                                            class="form-input text-base rounded-md border-2 border-solid border-neutral-200 focus:outline-none"
                                            placeholder="Address*" />
                                        <input
                                            type="text"
                                            class="form-input text-base rounded-md border-2 border-solid border-neutral-200 focus:outline-none"
                                            placeholder="Phone*" />
                                        <input
                                            type="text"
                                            class="form-input text-base rounded-md border-2 border-solid border-neutral-200 focus:outline-none"
                                            placeholder="Email*" />
                                    </div>

                                    <div class="mt-5">
                                        <button class="font-bold cursor-pointer text-base rounded-sm border-0 w-max px-5 py-2 text-white bg-primary">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>